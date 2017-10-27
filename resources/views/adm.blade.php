@extends('layouts.trainer-app')

@section('content')

    <div id="first" class="ui container">
        <div class="ui pointing secondary tabular menu">
            <a class="item active" data-tab="first">Alunos</a>
            <a class="item" data-tab="second">Treinadores</a>
        </div>
        <div class="ui bottom attached tab segment active" data-tab="first">
            <div class="ui divided items">
                @forelse($users as $user)
                    <div class="item">
                       <a href="/aluno/{{$user->id}}" class="student name">{{$user->name}}</a>
                    </div>
                @empty
                    <div class="item">
                        Não há alunos cadastrados
                    </div>
                @endforelse
            </div>
        </div>
        <div class="ui bottom attached tab segment" data-tab="second">
            <div class="ui divided items">
                <div class="item"></div>
            </div>
        </div>
    </div>

    <div class="ui fixed inverted bottom menu">
        <div class="ui container">
            <div class="right menu">
                <div class="ui item">
                    <img src="{{ URL::asset('images/icons/sidebar/log-out.svg') }}" alt="" class="new exercise action">
                </div>
                <div class="ui item">
                    <img src="{{ URL::asset('images/icons/sidebar/log-out.svg') }}" alt="" class="new part action">
                </div>
            </div>
        </div>
    </div>

    <div class="ui large student modal">
        <i class="close icon"></i>
        <div class="header">
            Adicionar Aluno
        </div>
        <div class="content">
            <form class="ui form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="fields">
                    <div class="five wide field">
                        {!! Form::label('name', 'Nome')!!}
                        {!! Form::text('name')!!}
                    </div>

                    <div class="three wide field">
                        {!! Form::label('cpf', 'CPF') !!}
                        {!! Form::text('cpf') !!}
                    </div>

                    <div class="four wide field">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::text('email') !!}
                    </div>

                    <div class="two wide field">
                        {!! Form::label('gender', 'Sexo') !!}
                        {!! Form::select('gender', ["h"=>"Masculino", "f"=>"Feminino"]) !!}
                    </div>

                    <div class="four wide field">
                        {!! Form::label('birth_date', 'Data de Nascimento') !!}
                        {!! Form::text('birth_date') !!}
                    </div>

                    <div class="three wide field">
                        {!! Form::label('job', 'Profissão') !!}
                        {!! Form::text('job') !!}
                    </div>

                </div>

                <div class="fields">

                    <div class="three wide field">
                        <label for="cep">CEP</label>
                        <input type="text" name="cep">
                    </div>

                    <div class="four wide field">
                        {!! Form::label('street', 'Endereço') !!}
                        {!! Form::text('street') !!}
                    </div>

                    <div class="two wide field">
                        {!! Form::label('home_number', 'Número') !!}
                        {!! Form::text('home_number') !!}
                    </div>

                    <div class="three wide field">
                        {!! Form::label('neighborhood', 'Bairro') !!}
                        {!! Form::text('neighborhood') !!}
                    </div>

                    <div class="three wide field">
                        {!! Form::label('city', 'Cidade') !!}
                        {!! Form::text('city') !!}
                    </div>

                    <div class="two wide field"> {{--TODO: create a field for state in Address model--}}
                        {!! Form::label('state', 'Estado') !!}
                        {!! Form::text('state') !!}
                    </div>

                </div>

                <div class="two fields">

                    <div class="three wide field">
                        {!! Form::label('phone', 'Telefone') !!}
                        {!! Form::text('phone') !!}
                    </div>

                    <div class="three wide field">
                        {!! Form::label('cellphone', 'Celular') !!}
                        {!! Form::text('cellphone') !!}
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
            <div class="ui button">Cancelar</div>
            {!! Form::submit('Cadastrar', ['class' => 'ui button']) !!}
            {!! Form::close() !!}
        </div>
        </form>
    </div>
    <div class="ui large trainer modal">
        <i class="close icon"></i>
        <div class="header">
            Adicionar Treinador
        </div>
        <div class="content">
            <form class="ui form">
                <div class="fields">
                    <div class="five wide field">
                        <label>Nome completo</label>
                        <input type="text" name="name" placeholder="Nome completo">
                    </div>
                    <div class="three wide field">
                        <label>CPF</label>
                        <input type="text" name="cpf" placeholder="Apenas números">
                    </div>
                    <div class="four wide field">
                        <label>E-mail</label>
                        <input type="email" name="email" placeholder="exemplo@gmail.com">
                    </div>
                    <div class="two wide field">
                        <label>Sexo</label>
                        <div class="ui compact selection dropdown">
                            <input type="hidden" name="gender">
                            <i class="dropdown icon"></i>
                            <div class="default text">Sexo</div>
                            <div class="menu">
                                <div class="item" data-value="1">Masculino</div>
                                <div class="item" data-value="0">Feminino</div>
                            </div>
                        </div>
                    </div>
                    <div class="four wide field">
                        <label>Data de Nascimento</label>
                        <input type="date" name="date" placeholder="dd/mm/aaaa">
                    </div>
                    <div class="three wide field">
                        <label>RG</label>
                        <input type="text" name="rg" placeholder="Apenas números">
                    </div>
                </div>

                <div class="fields">
                    <div class="three wide field">
                        <label>CEP</label>
                        <input type="text" name="cep" placeholder="Apenas números" maxlength="9">
                    </div>

                    <div class="four wide field">
                        <label>Rua</label>
                        <input type="text" name="street" placeholder="Rua, alameda, avenida, ...">
                    </div>

                    <div class="two wide field">
                        <label>Número</label>
                        <input type="text" name="number" placeholder="Número">
                    </div>

                    <div class="three wide field">
                        <label>Bairro</label>
                        <input type="text" name="neighborhood" placeholder="Nome do bairro">
                    </div>

                    <div class="three wide field">
                        <label>Cidade</label>
                        <input type="text" name="city" placeholder="Nome da Cidade">
                    </div>

                    <div class="two wide field">
                        <label>Estado</label>
                        <input type="text" name="state" placeholder="Sigla">
                    </div>
                </div>

                <div class="two fields">
                    <div class="three wide field">
                        <label>Telefone</label>
                        <input type="text" name="telephone" placeholder="DDD e número">
                    </div>

                    <div class="three wide field">
                        <label>Celular</label>
                        <input type="text" name="cellphone" placeholder="DDD e número">
                    </div>
                </div>

                <button class="ui button" type="submit">Submit</button>
            </form>
        </div>
        <div class="actions">
            <div class="ui button">Cancelar</div>
            <div class="ui button">OK</div>
        </div>
    </div>
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

@endsection