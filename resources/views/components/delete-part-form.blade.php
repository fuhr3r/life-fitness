<div class="ui delete part modal">
    <i class="close icon"></i>
    <div class="header">
        Remover Parte do Corpo
    </div>
    <div class="content">
        {!! Form::open(['method' => 'delete', 'action' => ['PartController@destroy', null], 'class' => 'ui part form'] ) !!}
        {{ csrf_field() }}
        <input type="hidden" name="id" value="">
        <div class="fields">
            <h4>Tem certeza que deseja remover a parte do corpo?</h4>
        </div>
        <div class="fields">
            <h5>Todos os exercícios associados a ela serão removidos também.</h5>
        </div>
    </div>
    <div class="actions">
        <div class="ui cancel button">Cancelar</div>
        {!! Form::submit('Sim', ['class' => 'ui delete part confirm button']) !!}
        {!! Form::close() !!}
    </div>
</div>