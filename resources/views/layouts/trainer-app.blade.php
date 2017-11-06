<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=0; initial-scale=1.0, maximum-scale=1.0">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=false;">
    <meta name="viewport" content="width=device-width, user-scalable=no"/>
    <meta name="theme-color" content="#000000"/>

    {{--<link rel="icon" sizes="192x192" href="nice-highres.png"> //logo--}}
    <link rel="stylesheet" href="{{ URL::asset('semantic/semantic.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css/app.css') }}"/>
    @stack('admin-nav-bar')
</head>
<body>

<div class="ui fixed inverted menu">
    <div class="ui container">
        <div class="header item">
            @if (Request::segment(1) == 'aluno')
                <a href="/admin"><i class="chevron left icon action"></i></a>
            @elseif(Request::segment(1) == 'admin')
                <i class="chevron left icon disabled action"></i>
            @endif
        </div>
        <div class="header item">
            {{--Todo: gambiarra bruno, desfaça.--}}
            @if (Request::segment(1) == 'aluno')
                <span class="main title">Aluno</span>
            @elseif(Request::segment(1) == 'admin')
                <span class="main title">Home</span>
            @elseif (Request::segment(1) == 'part')
                <span class="main title">Partes do corpo e treinos cadastrados</span>
            @endif
        </div>

        <div class="right menu">
            @if (Request::segment(1) == 'admin')
                <div class="ui item">
                    <i class="users icon new trainer action"></i>
                    {{--                    <img src="{{ URL::asset('images/icons/sidebar/log-out.svg') }}" alt="" class="new trainer action">--}}
                </div>
                <div class="ui item">
                    <i class="user icon new user action"></i>
                    {{--                    <img src="{{ URL::asset('images/icons/sidebar/log-out.svg') }}" alt="" class="new user action">--}}
                </div>
            @endif

            @if (Request::segment(1) == 'aluno')
                <div class="ui item">
                    <i class="edit user icon action"></i>
                    {{--                        <img src="{{ URL::asset('images/icons/sidebar/log-out.svg') }}" alt="" class="new user action">--}}
                </div>
                <div class="ui item">
                    <i class="list layout icon action new training action"></i>
                </div>
            @endif
            <div class="ui item">
                <div class="ui icon top right pointing dropdown">
                    <i class="wrench icon"></i>
                    <div class="menu">
                        <a href="/part">
                            <div class="item">Partes do corpo e treinos cadastrados</div>
                        </a>
                        <div class="item">Alterar Senha</div>
                        <div class="ui divider"></div>
                        <div class="item">Sair</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('content')

<script src="{{ URL::asset('js/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ URL::asset('semantic/semantic.js') }}"></script>

<script src="{{ URL::asset('js/hammer-js/hammer.min.js') }}"></script>
<script src="{{ URL::asset('js/hammer-js/hammer-time.min.js') }}"></script>
<script src="{{ URL::asset('js/hammer-js/jquery.hammer.js') }}"></script>

<script src="{{ URL::asset('js/vanilla-masker/vanilla-masker.min.js') }}"></script>
<script src="{{ URL::asset('js/vanilla-masker/masks.js') }}"></script>
<script src="{{ URL::asset('js/cep.js') }}"></script>

<script src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>
