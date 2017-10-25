<?php

namespace App\Http\Controllers;

use App\Exercise;
use App\Part;
use App\User;
use App\Day;
use App\User_Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserExerciseController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $user = User::find($id);
        $exercise = Exercise::find($request->exercise);
        $user->exercises()
            ->save($exercise, $request->only(['serie', 'repetitions', 'weight', 'day_id']));

        $exercises = Exercise::pluck('name', 'id');
        $user_exercise = User_Exercise::where('user_id', $user->id)->with('exercise')->get();
        $parts = Part::pluck('name', 'id');
        $days = Day::pluck('name', 'id');

        return view('aluno',
            ['user' => $user, 'user_exercise' => $user_exercise, 'exercises' => $exercises, 'parts' => $parts, 'days' => $days]);
    }


    public function listUsers(){
        $users = User::all();
        $parts = Part::pluck('name', 'id');
        return view('adm', ['users' => $users, 'parts' => $parts]);
    }

    public function listExercises($id){
        $user = User::find($id);
        //$user_exercise = User_Exercise::where('user_id', $user->id)->with('exercise')->get();
        $parts = Part::pluck('name', 'id');
        $days = Day::pluck('name', 'id');

        $user_exercises = [];

        foreach($days as $day_id => $day){
            $user_exercises[$day] = User_Exercise::where('user_id', $user->id)
                       ->where('day_id', $day_id)
                       ->get();
        }

        $parts = Part::pluck('name', 'id');


        $partes = [];


        foreach ($days as $day_id => $day){
            foreach ($parts as $part_id => $part){
                $x = User_Exercise::with('exercise')->whereHas('exercise', function ($query) use ($part_id){
                    $query->where('part_id', '=', $part_id);
                })->where('day_id', '=', $day_id)->where('user_id', '=', $user->id)
                  ->get();

                if ($x->first())
                    $partes[$part] = $x;

            }
            $user_exercises[$day] = $partes;
            $partes = [];
        }


        //$exercises = Exercise::pluck('name', 'id');
        return view('aluno',
            ['user' => $user, 'user_exercises' => $user_exercises, 'parts' => $parts, 'days' => $days]);
    }

    public function listExercisesByPart($id){
        $exercises = Exercise::where('part_id', $id)->get();
        return $exercises;

    }

    public function destroy($id){

    }



}
