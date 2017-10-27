@extends('layouts.trainer-app')

@section('content')

    <div class="ui container" id="first">
        <div class="ui pointing secondary tabular menu">
            <a class="item active" data-tab="first">Treinos</a>
            <a class="item" data-tab="second">Dados</a>
        </div>
        <div class="ui bottom attached tab segment active" data-tab="first">
            <div class="ui fluid styled accordion">
                <div class="active title">
                    <i class="dropdown icon"></i>
                    <span>Segunda</span>
                </div>
                <div class="content">
                    <div class="accordion">
                        <div class="title">
                            <i class="dropdown icon"></i>
                            Peitoral
                        </div>
                        <div class="content">
                            <table class="ui very basic table">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th><i class="bookmark icon"></i></th>
                                    <th><i class="bookmark icon"></i></th>
                                    <th><i class="bookmark icon"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Supino Reto <i class="trash outline icon"></i></td>
                                    <td>99</td>
                                    <td>99</td>
                                    <td>99</td>
                                </tr>
                                <tr>
                                    <td>Supino Reto</td>
                                    <td>99</td>
                                    <td>99</td>
                                    <td>99</td>
                                </tr>
                                <tr>
                                    <td>Supino Reto</td>
                                    <td>99</td>
                                    <td>99</td>
                                    <td>99</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui bottom attached tab segment" data-tab="second">
            <div>INFORMAÇÕES FIXAS</div>
            <div class="wrapper">
                <div class="timeline container">
                    <div class="ui styled accordion">
                        <div class="active title">
                            <i class="dropdown icon"></i>
                            <span>2017</span>
                        </div>
                        <div class="content">
                            <p><a href="">Janeiro</a></p>
                            <p><a href="">Fevereiro</a></p>
                            <p><a href="">Março</a></p>
                        </div>
                    </div>
                </div>
                <div class="info container">
                    form de evolução
                </div>
            </div>
        </div>
    </div>

    ---------------TESTE---------------
    <br>


    @forelse($user_exercises as $day => $exercises)
        <b>{{$day}}</b><br>
        @foreach($exercises as $key => $ex)
            --{{$key}}<br>
            @foreach($ex as $a)
                ------{{$a->exercise->name}}<br>
            @endforeach
        @endforeach
    @empty
        vazio
    @endforelse


    <div class="ui large edit user modal">
        <i class="close icon"></i>
        <div class="header">
            Editar Aluno
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
    <div class="ui training modal">
        <i class="close icon"></i>
        <div class="header">
            Adicionar Treino
        </div>
        <div class="content">
            {!! Form::open(['action' => ['UserExerciseController@store', $user->id], 'class' => 'ui form'] ) !!}
            {{ csrf_field() }}
            <div class="fields">
                <div class="five wide field">
                    {!! Form::label('parts', 'Selecione a parte do corpo')!!}
                    {!! Form::select('parts', $parts, null, ['id' => 'parts_select']) !!}
                </div>

                <div class="three wide field">
                    {!! Form::label('exercise', 'Exercício') !!}
                    {!! Form::select('exercise', [], null, ['id' => 'exercises_select']) !!}
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
            <div class="ui button">Cancelar</div>
            {!! Form::submit('Cadastrar', ['class' => 'ui button']) !!}
            {!! Form::close() !!}
        </div>
        </form>
    </div>

@endsection