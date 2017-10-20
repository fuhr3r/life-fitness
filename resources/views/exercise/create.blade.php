

    {!! Form::model($exercise, ['action' => 'ExerciseController@store']) !!}

    name
    {!! Form::text('name') !!}

    {!! Form::select('part', $parts) !!}

    {!! Form::submit('Cadastrar') !!}

    {!! Form::close() !!}
