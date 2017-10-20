<?php

namespace App\Http\Controllers;

use App\Exercise;
use App\Part;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exercises = Exercise::all();
        return view('exercise.index', ['exercises' => $exercises]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $exercise = new Exercise;
        $parts = Part::pluck('name', 'id');
        return view('exercise.create', ['exercise' => $exercise, 'parts' => $parts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $part = Part::find($request->part);

        $exercise = new Exercise($request->all());

        $part->exercise()->save($exercise);

        return view('exercise.show', ['exercise' => $exercise]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exercise = Exercise::find($id);
        return view('exercise.show', ['exercise' => $exercise]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exercise = Exercise::find($id);
        $parts = Part::pluck('name', 'id');
        return view('exercise.edit', ['exercise' => $exercise, 'parts' => $parts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $exercise = Exercise::find($id);
        $part = Part::find($request->part);
        $exercise->name = $request->name;
        $exercise->part()->associate($part);
        $exercise->save();
        return view('exercise.show', ['exercise' => $exercise]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Exercise::destroy($id);
        $exercises = Exercise::all();
        return view('exercise.index', ['exercises' => $exercises]);
    }
}
