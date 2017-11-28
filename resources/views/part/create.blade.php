

    {!! Form::model($part, ['action' => 'PartController@store']) !!}

    name
    {!! Form::text('name') !!}
    {!! Form::submit('Cadastrar') !!}

    {!! Form::close() !!}
\\\