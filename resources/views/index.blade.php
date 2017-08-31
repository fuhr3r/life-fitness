<head>
    <title>Academia Life Fitness</title>
    <meta charset="UTF-8"/>
    <meta name=”viewport” content=”width=device-width, user-scalable=0; initial-scale=1.0, maximum-scale=1.0">
    <meta name=”viewport” content=”width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=false;”>
    <meta name="viewport" content="width=device-width, user-scalable=no"/>
    <meta name="theme-color" content="#000000" />

    {{--<link rel="icon" sizes="192x192" href="nice-highres.png"> //logo--}}
    <link rel="stylesheet" href="{{ URL::asset('semantic/semantic.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css/app.css') }}"/>
</head>

<div class="ui inverted vertical menu wide sidebar">
    <a class="item">
        <i class="undo icon"></i>
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

    <section class="ui padded container">

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
                    <i class="undo icon"></i>
                </div>
                <div class="values list">
                    <span>99</span>
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


<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="{{ URL::asset('semantic/semantic.js') }}"></script>

<script src="{{ URL::asset('js/hammer.min.js') }}"></script>
<script src="{{ URL::asset('js/hammer-time.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.hammer.js') }}"></script>


<script src="{{ URL::asset('js/app.js') }}"></script>

{{--<script src="js/js.js"></script>--}}