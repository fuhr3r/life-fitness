<div class="ui part modal">
    <i class="close icon"></i>
    <div class="header">
        Adicionar Parte do Corpo
    </div>
    <div class="content">
        {!! Form::open(['action' => 'PartController@store', 'class' => 'ui form']) !!}
        <div class="fields">
            <div class="five wide field">
                {!! Form::label('name', 'Parte do Corpo') !!}
                {!! Form::text('name') !!}
            </div>
        </div>
    </div>
    <div class="actions">
        {!! Form::submit('Cadastrar', ['class' => 'ui button']) !!}
        {!! Form::close() !!}
    </div>
</div>