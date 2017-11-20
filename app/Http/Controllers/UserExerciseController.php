<?php

namespace App\Http\Controllers;

use App\Exercise;
use App\Part;
use App\User;
use App\Day;
use App\User_Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

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
        $user_exercises = $this->getUserExercises($user->id);
        $parts = Part::pluck('name', 'id');
        $days = Day::pluck('name', 'id');


        return redirect()->route('aluno', ['id'=>$user->id])->with(['user' => $user, 'user_exercises' => $user_exercises, 'parts' => $parts, 'days' => $days]);
    }

    public function listUsers(){
        $users = User::all();
        $parts = Part::pluck('name', 'id');

        return view('adm', ['users' => $users, 'parts' => $parts]);
    }

    public function listExercises($id){
        $user = User::find($id);
        $days = Day::pluck('name', 'id');
        $parts = Part::pluck('name', 'id');

        $user_exercises = $this->getUserExercises($user->id);

        return view('aluno',
            ['user' => $user, 'user_exercises' => $user_exercises, 'parts' => $parts, 'days' => $days]);
    }

    public function listExercisesByPart($id){
        $exercises = Exercise::where('part_id', $id)->get();
        return $exercises;

    }

    public function update(Request $request, $id){

        $user = User::find($id);
        $days = Day::pluck('name', 'id');
        $parts = Part::pluck('name', 'id');

        $user_exercise = User_Exercise::find($request->id);
        $user_exercise->exercise->name = $request->exercise_name;
        $user_exercise->serie = $request->serie;
        $user_exercise->repetitions = $request->repetitions;
        $user_exercise->weight = $request->weight;
        $user_exercise->day()->associate(Day::find($request->day_id));

        $user_exercise->save();

        $user_exercises = $this->getUserExercises($user->id);

        return view('aluno',
            ['user' => $user, 'user_exercises' => $user_exercises, 'parts' => $parts, 'days' => $days]);


    }

    public function destroy($id){

    }

    private function getUserExercises($user_id){
        $days = Day::pluck('name', 'id');
        $parts = Part::pluck('name', 'id');

        $user_exercises = [];
        $exercise_parts = [];

        foreach ($days as $day_id => $day){
            foreach ($parts as $part_id => $part){
                $exercise = User_Exercise::with('exercise')->whereHas('exercise', function ($query) use ($part_id){
                    $query->where('part_id', '=', $part_id);
                })->where('day_id', '=', $day_id)->where('user_id', '=', $user_id)
                    ->get();

                if ($exercise->first())
                    $exercise_parts[$part] = $exercise;


            }

            $user_exercises[$day] = $exercise_parts;
            $exercise_parts = [];
        }

        return $user_exercises;
    }

}
