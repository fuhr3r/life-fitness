<div class="ui large student modal">
    <i class="close icon"></i>
    <div class="header">
        {{$title}}
    </div>
    <div class="content">
        {!! Form::open(['route' => 'register', 'class' => 'ui form', 'id' => 'new-user']) !!}
        {{ csrf_field() }}
        <div class="fields">
            <div class="five wide field">
                {!! Form::label('name', 'Nome')!!}
                {!! Form::text('name', null, ['required'])!!}
            </div>

            <div class="three wide field">
                {!! Form::label('cpf', 'CPF') !!}
                {!! Form::text('cpf', null, ['required']) !!}
            </div>

            <div class="four wide field">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', null, ['required']) !!}
            </div>

            <div class="three wide field">
                {!! Form::label('gender', 'Sexo') !!}
                {!! Form::select('gender', ["h"=>"Masculino", "f"=>"Feminino"]) !!}
            </div>

            <div class="three wide field">
                {!! Form::label('birth_date', 'Data de Nascimento') !!}
                {!! Form::text('birth_date', null, ['required']) !!}
            </div>

            <div class="three wide field">
                {!! Form::label('job', 'Profissão') !!}
                {!! Form::text('job', null, ['required']) !!}
            </div>
        </div>

        <div class="fields">

            <div class="two wide field">
                <label for="cep">CEP</label>
                <input type="text" name="cep">
            </div>

            <div class="four wide field">
                {!! Form::label('street', 'Endereço') !!}
                {!! Form::text('street', null, ['required']) !!}
            </div>

            <div class="two wide field">
                {!! Form::label('home_number', 'Número') !!}
                {!! Form::text('home_number', null, ['required']) !!}
            </div>

            <div class="three wide field">
                {!! Form::label('neighborhood', 'Bairro') !!}
                {!! Form::text('neighborhood', null, ['required']) !!}
            </div>

            <div class="three wide field">
                {!! Form::label('city', 'Cidade') !!}
                {!! Form::text('city', null, ['required']) !!}
            </div>

            <div class="two wide field">
                {!! Form::label('state', 'Estado') !!}
                {!! Form::text('state', null, ['required']) !!}
            </div>

        </div>

        <div class="three fields">

            <div class="three wide field">
                {!! Form::label('phone', 'Telefone') !!}
                {!! Form::text('phone', null, ['required']) !!}
            </div>

            <div class="three wide field">
                {!! Form::label('cellphone', 'Celular') !!}
                {!! Form::text('cellphone', null, ['required']) !!}
            </div>


        </div>

        <div class="fields">
            <div class="two wide field">
                {!! Form::label('password', 'Senha') !!}
                {!! Form::text('password', null, ['required']) !!}
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
        {!! Form::close() !!}
    </div>
    <div class="actions">
        <div class="ui cancel button">Cancelar</div>
        {!! Form::submit('Cadastrar', ['class' => 'ui button', 'form' => 'new-user']) !!}
        {!! Form::close() !!}
    </div>
    </form>
</div>