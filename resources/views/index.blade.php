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
        <span>Sair</span>
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

    <section id="first" class="ui padded container">

        <div class="left container">
            <div class="heading wrapper">
                <img class="ui mini image" src="{{ URL::asset('images/icons/ombro.png') }}">
                <h2>Posterior da coxa</h2>
            </div>
            <div class="trainings list">
                <span>Rosca alternada B. inclinada</span>
                <span>Lorem Lorem Lorem</span>
            </div>
        </div>

        <div class="right container">
            <div class="serie column">
                <div class="icon wrapper">
                    <img class="ui mini image" src="{{ URL::asset('images/student-list/halter.svg') }}">
                </div>
                <div class="values list">
                    <span>99</span>
                    <span>99</span>
                </div>
            </div>

            <div class="serie column">
                <div class="icon wrapper">
                    <img class="ui mini image" src="{{ URL::asset('images/student-list/weight.svg') }}">
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
