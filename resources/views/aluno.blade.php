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
                            <span class="transition visible">Supíno Reto</span>
                            <span style="float: right">1</span>
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

@endsection