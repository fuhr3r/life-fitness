<?php

namespace App\Http\Controllers;

use App\Exercise;
use App\Part;
use App\User;
use App\User_Exercise;
use Illuminate\Http\Request;

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
            ->save($exercise, $request->only(['serie', 'repetitions', 'weight', 'day']));

        $exercises = Exercise::pluck('name', 'id');
        $user_exercise = User_Exercise::where('user_id', $user->id)->with('exercise')->get();

        return view('aluno',
            ['user' => $user, 'user_exercise' => $user_exercise, 'exercises' => $exercises]);
    }


    public function listUsers(){
        $users = User::all();
        return view('adm', ['users' => $users]);
    }

    public function listExercises($id){
        $user = User::find($id);
        $user_exercise = User_Exercise::where('user_id', $user->id)->with('exercise')->get();
        $exercises = Exercise::pluck('name', 'id');
        return view('aluno',
            ['user' => $user, 'user_exercise' => $user_exercise, 'exercises' => $exercises]);
    }

    public function destroy($id){

    }



}
