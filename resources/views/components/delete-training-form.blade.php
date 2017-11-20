<div class="ui remove training modal">
    <i class="close icon"></i>
    <div class="header">
        Remover Treino
    </div>
    <div class="content">
        {!! Form::open(['action' => ['UserExerciseController@update', $user->id], 'class' => 'ui form'] ) !!}
        {{ csrf_field() }}
        <input type="hidden" name="id" value="">
        <div class="fields">
            <h4>Tem certeza que deseja remover o treino?</h4>
        </div>
    </div>
    <div class="actions">
        <div class="ui cancel button">Cancelar</div>
        {!! Form::submit('Sim', ['class' => 'ui button']) !!}
        {!! Form::close() !!}
    </div>
</div>