<div class="ui edit exercise modal">
    <i class="close icon"></i>
    <div class="header">
        Editar treino
    </div>
    <div class="content">
        {{ Form::open(['method' => 'PUT', 'route' => ['exercise.update', null], 'class' => 'ui form' ]) }}
{{--        {!! Form::open(['action' => ['UserExerciseController@destroy', $user->id], 'class' => 'ui form'] ) !!}--}}
        {{ csrf_field() }}
        <input type="hidden" name="id" value="">
        <div class="fields">
            <div class="five wide field">
                {!! Form::label('name', 'Nome')!!}
                {!! Form::text('name')!!}
            </div>
        </div>
    </div>
    <div class="actions">
        <div class="ui cancel button">Cancelar</div>
        {!! Form::submit('Sim', ['class' => 'ui button']) !!}
        {!! Form::close() !!}
    </div>
</div>