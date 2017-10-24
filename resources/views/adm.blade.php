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