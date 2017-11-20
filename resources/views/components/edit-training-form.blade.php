<div class="ui edit training modal">
    <i class="close icon"></i>
    <div class="header">
        Editar Treino
    </div>
    <div class="content">
        {!! Form::open(['action' => ['UserExerciseController@update', $user->id], 'class' => 'ui form'] ) !!}
        {{ csrf_field() }}
        <input type="hidden" name="id" value="">
        <div class="fields">
            <div class="four wide field">
                {!! Form::label('parts', 'Selecione a parte do corpo')!!}
                {!! Form::select('parts', $parts, null, ['class' => 'parts select']) !!}
            </div>

            <div class="five wide field">
                {!! Form::label('exercise', 'Exercício') !!}
                {!! Form::select('exercise', [], null, ['class' => 'exercises select']) !!}
            </div>
        </div>

        <div class="fields">
            <div class="two wide field">
                {!! Form::label('serie', 'Série') !!}
                {!! Form::number('serie') !!}
            </div>


            <div class="two wide field">
                {!! Form::label('repetitions', 'Repetições') !!}
                {!! Form::number('repetitions') !!}
            </div>

            <div class="two wide field">
                {!! Form::label('weight', 'Carga') !!}
                {!! Form::number('weight') !!}
            </div>
        </div>

        <div class="fields">
            <div class="three wide field">
                {!! Form::label('day_id', 'Dia da Semana') !!}
                {!! Form::select('day_id', $days) !!}
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="actions">
        <div class="ui cancel button">Cancelar</div>
        {!! Form::submit('Cadastrar', ['class' => 'ui button']) !!}
        {!! Form::close() !!}
    </div>
    </form>
</div>