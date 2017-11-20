<div class="ui large student modal">
    <i class="close icon"></i>
    <div class="header">
       Editar Aluno
    </div>
    <div class="content">
        {!! Form::open(['route' => 'user-register', 'class' => 'ui form', 'id' => 'new-user']) !!}
        {{ csrf_field() }}
        <div class="fields">
            <div class="five wide field">
                {!! Form::label('name', 'Nome')!!}
                {!! Form::text('name', $user->name)!!}
            </div>

            <div class="three wide field">
                {!! Form::label('cpf', 'CPF') !!}
                {!! Form::text('cpf', $user->cpf) !!}
            </div>

            <div class="four wide field">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', $user->email) !!}
            </div>

            <div class="three wide field">
                {!! Form::label('gender', 'Sexo') !!}
                {!! Form::select('gender', ["m"=>"Masculino", "f"=>"Feminino"]) !!}
            </div>

            <div class="three wide field">
                {!! Form::label('birth_date', 'Data de Nascimento') !!}
                {!! Form::text('birth_date', $user->birth_date) !!}
            </div>

            <div class="three wide field">
                {!! Form::label('job', 'Profissão') !!}
                {!! Form::text('job', $user->job) !!}
            </div>
        </div>

        <div class="fields">
                {{--todo: parou aqui--}}
            <div class="two wide field">
                <label for="cep">CEP</label>
                <input type="text" name="cep">
            </div>

            <div class="four wide field">
                {!! Form::label('street', 'Endereço') !!}
                {!! Form::text('street', $user->address->street) !!}
            </div>

            <div class="two wide field">
                {!! Form::label('home_number', 'Número') !!}
                {!! Form::text('home_number', $user->home_number) !!}
            </div>

            <div class="three wide field">
                {!! Form::label('neighborhood', 'Bairro') !!}
                {!! Form::text('neighborhood', $user->neighborhood) !!}
            </div>

            <div class="three wide field">
                {!! Form::label('city', 'Cidade') !!}
                {!! Form::text('city', $user->city) !!}
            </div>

            <div class="two wide field"> {{--TODO: create a field for state in Address model--}}
                {!! Form::label('state', 'Estado') !!}
                {!! Form::text('state', $user->state) !!}
            </div>

        </div>

        <div class="three fields">

            <div class="three wide field">
                {!! Form::label('phone', 'Telefone') !!}
                {!! Form::text('phone', $user->phone) !!}
            </div>

            <div class="three wide field">
                {!! Form::label('cellphone', 'Celular') !!}
                {!! Form::text('cellphone', $user->cellphone) !!}
            </div>

        </div>

        <div class="fields">
            <div class="two wide field">
                {!! Form::label('password', 'Senha') !!}
                {!! Form::text('password', $user->password) !!}
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