@extends('layouts.trainer-app')

@section('content')

    <div id="first" class="ui container">
        <div class="ui pointing secondary tabular menu">
            <a class="item active" data-tab="first">Alunos</a>
            <a class="item" data-tab="second">Treinadores</a>
        </div>
        <div class="ui bottom attached tab segment active" data-tab="first">
            <table class="ui stripped table">
                <tbody>
                @forelse($users as $user)
                <tr>
                    <td><a href="/aluno/{{$user->id}}" class="student name">{{$user->name}}</a></td>
                </tr>
                @empty
                    Vazio
                @endforelse
                </tbody>
            </table>
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