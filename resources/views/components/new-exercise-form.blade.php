<div class="ui exercise modal">
    <i class="close icon"></i>
    <div class="header">
        Adicionar Exercício
    </div>
    <div class="content">
        {!! Form::open(['action' => 'ExerciseController@store', 'class' => 'ui form']) !!}
        <div class="fields">
            <div class="five wide field">
                {!! Form::label('part', 'Parte do corpo associada') !!}
                {!! Form::select('part', $parts) !!}
            </div>
            <div class="five wide field">
                {!! Form::label('name', 'Exercício') !!}
                {!! Form::text('name') !!}
            </div>
        </div>
    </div>
    <div class="actions">
        {!! Form::submit('Cadastrar', ['class' => 'ui button']) !!}
        {!! Form::close() !!}
    </div>
</div>