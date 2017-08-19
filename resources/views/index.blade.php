

<head>
    <title>Academia Life Fitness</title>
    <meta  charset="UTF-8" />
    <meta name=”viewport” content=”width=device-width, user-scalable=0; initial-scale=1.0, maximum-scale=1.0" >
    <meta name=”viewport” content=”width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=false;” >
    <meta name="viewport" content="width=device-width, user-scalable=no" />

    <link rel="stylesheet" href="{{ URL::asset('semantic/semantic.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/app.css/app.css') }}" />
</head>

<div class="ui left demo thin vertical inverted sidebar labeled icon menu">
    <a id="home" class="item">
        <i class="checked calendar icon"></i>
        Treino de Hoje
    </a>
    <a id="digievolution" class="item">
        <i class="line chart icon"></i>
        Minha Evolução
    </a>
    <a class="item">
        <i class="setting icon"></i>
        Configurações
    </a>
    <a id="quit" class="item">
        <i class="power icon"></i>
        Sair
    </a>
</div>

<div class="pusher">

    <div class="ui fixed inverted menu">
        <div class="ui container">
            <a id="menuButton" href="#" class="item circular ui icon button">
                <i class="content icon"></i>
            </a>
            <a href="#" class="header item disabled">
                {{--<img class="ui mini circular image konata" src="images/maxresdefault.jpg">--}}
                <span id="top_name" class="ui label">Academia Life Fitness</span>
            </a>
        </div>
    </div>

    <section class="ui padded grid">

        <div class="ui items">
            <div class="item">
                <h2 class="ui header">
                    <img class="ui mini image" src="{{ URL::asset('images/icons/ombro.png') }}">
                    <div class="content">
                        Ombro
                    </div>
                </h2>

                <div class="item">
                    <p>Supino Reto</p>
                    <div class="right floated item">
                        2
                    </div>
                </div>
                <p>Supino Reto</p>
                <p>Supino Reto</p>
            </div>

        </div>




    </section>

</div>


<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="{{ URL::asset('semantic/semantic.js') }}"></script>
<script src="{{ URL::asset('js/app.js') }}"></script>

{{--<script src="js/js.js"></script>--}}