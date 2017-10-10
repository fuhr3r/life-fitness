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
                            <p class="transition visible">Supíno Reto</p>
                            <p style="float: right">1</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui bottom attached tab segment" data-tab="second">
            <table class="ui stripped table">
                <tbody>
                <tr>
                    <td><a href="#" class="trainer name">ipsum</a></td>
                </tr>
                <tr>
                    <td><a href="#">ipsum</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection