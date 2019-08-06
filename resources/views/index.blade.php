@extends('layouts.student-app')

@section('content')
    <div class="ui inverted vertical menu wide sidebar">
        <a class="item">
            <img class="ui mini image" src="{{ URL::asset('images/icons/sidebar/list.svg') }}">
            <span>Treino de Hoje</span>
        </a>
        <a class="item">
            <img class="ui mini image" src="{{ URL::asset('images/icons/sidebar/graph.svg') }}">
            <span>Minha Evolução</span>
        </a>
        <a class="item">
            <img class="ui mini image" src="{{ URL::asset('images/icons/sidebar/wrench.svg') }}">
            <span>Configurações</span>
        </a>
        <a class="item">
            <img class="ui mini image" src="{{ URL::asset('images/icons/sidebar/log-out.svg') }}">
            <span><form action="/logout" method="post">
                                {{csrf_field()}}
                    <button type="submit">Sair</button>
                            </form></span>
        </a>
    </div>
    <div class="pusher">
        {{--<img class="ui mini image" src="{{ URL::asset('images/icons/ombro.png') }}">--}}
        <div class="ui fixed inverted menu">
            <div class="ui container">
                <a id="menuButton" href="#" class="item ui icon button">
                    <i class="content icon"></i>
                </a>
                <div class="header item disabled">
                    {{--<img class="ui mini circular image konata" src="images/maxresdefault.jpg">--}}
                    <span class="main title">Treino de hoje</span>
                </div>
            </div>
        </div>


        @forelse($user_exercises as $part => $exercises)
            <section class="ui padded container">
                <div class="left container">
                    <div class="heading wrapper">
                        <img class="ui mini image" src="{{ URL::asset('images/icons/ombro.png') }}">
                        <h2>{{$part}}</h2>
                    </div>
                    @if($exercises)
                        <div class="trainings list">
                            @foreach($exercises as $exercise => $user_exercise)
                                <span>{{$user_exercise->exercise->name}}</span>

                        </div>

                        <div class="right container">

                            <div class="serie column">
                                <div class="icon wrapper">
                                    <i class="undo icon"></i>
                                </div>

                                <div class="values list">
                                    <span>{{$user_exercise->serie}}</span>
                                </div>

                            </div>

                            <div class="serie column">
                                <div class="icon wrapper">
                                    <i class="undo icon"></i>
                                </div>

                                <div class="values list">
                                    <span>{{$user_exercise->repetitions}}</span>
                                </div>

                            </div>

                            <div class="serie column">
                                <div class="icon wrapper">
                                    <i class="undo icon"></i>
                                </div>

                                <div class="values list">
                                    <span>{{$user_exercise->weight}}</span>
                                </div>

                            </div>

                        </div>
                        @endforeach

                </div>
                @endif

            </section>
        @empty
        @endforelse


        <section class="ui padded container">


            <div class="left container">
                <div class="heading wrapper">
                    <img class="ui mini image" src="{{ URL::asset('images/icons/ombro.png') }}">
                    <h2>Ombro</h2>
                </div>

                <div class="trainings list">
                    <span>Lorem Lorem Lorem</span>
                </div>
            </div>


            <div class="right container">

                <div class="serie column">
                    <div class="icon wrapper">
                        <i class="undo icon"></i>
                    </div>

                    <div class="values list">
                        <span>99</span>
                    </div>

                </div>

                <div class="serie column">
                    <div class="icon wrapper">
                        <i class="undo icon"></i>
                    </div>

                    <div class="values list">
                        <span>99</span>
                    </div>

                </div>

                <div class="serie column">
                    <div class="icon wrapper">
                        <i class="undo icon"></i>
                    </div>

                    <div class="values list">
                        <span>99</span>
                    </div>

                </div>

            </div>


        </section>

    </div>
@endsection
