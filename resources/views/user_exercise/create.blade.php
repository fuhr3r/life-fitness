

    {!! Form::model($user_exercise, ['action' => ['UserExerciseController@store', 1]] ) !!}

    serie
    {!! Form::number('serie') !!}

    repetições
    {!! Form::number('repetitions') !!}

    peso
    {!! Form::number('weight') !!}

    dia
    {!! Form::select('day',
     ['seg'=>'segunda', 'ter'=>'terça', 'qua'=>'quarta', 'quin'=>'quinta', 'sex'=>'sexta', 'sab'=>'sábado', 'dom'=>'domingo']) !!}

    {!! Form::submit('Cadastrar') !!}

    {!! Form::close() !!}
