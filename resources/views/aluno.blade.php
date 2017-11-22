@extends('layouts.trainer-app')

@section('content')

    <div class="ui container" id="first">
        <div class="ui pointing secondary tabular menu">
            <a class="item active" data-tab="first">Treinos</a>
            <a class="item" data-tab="second">Dados</a>
        </div>

        <div class="ui bottom attached tab segment active" data-tab="first">
            @forelse($user_exercises as $day => $exercises)
                @if($exercises)
                    <div class="ui fluid styled accordion" data-id-exercise="{{--todo: $user_exercise--}}">
                        <div class="active title">
                            <i class="dropdown icon"></i>
                            <span>{{$day}}</span>
                        </div>
                        <div class="content">
                            <div class="accordion">
                                @foreach($exercises as $part => $exercise)
                                    <div class="part title">
                                        <i class="dropdown icon"></i>
                                        {{$part}}
                                    </div>
                                    <div class="content">
                                        <table class="ui very basic table">
                                            <thead>
                                            <tr>
                                                <th class="four wide"></th>
                                                <th><i class="bookmark icon"></i></th>
                                                <th><i class="bookmark icon"></i></th>
                                                <th><i class="bookmark icon"></i></th>
                                                <th class="three wide"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($exercise as $ex)
                                                <tr class="options wrapper" data-user-exercise="{{$ex->id}}">
                                                    <td>{{$ex->exercise->name}}
                                                    <td class="serie value">{{$ex->serie}}</td>
                                                    <td class="repetition value">{{$ex->repetitions}}</td>
                                                    <td class="weight value">{{$ex->weight}}</td>
                                                    <td class="container options cell">
                                                        <i class="delete training trash outline icon action"></i>
                                                        <i class="edit training icon action"></i>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>


                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            @empty
                <div class="ui fluid styled accordion">
                    <div class="active title">
                        <i class="dropdown icon"></i>
                        <span>ASD</span>
                    </div>
                    <div class="content">
                        asdasdas
                    </div>
                </div>
            @endforelse
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

    @include('components.edit-student-form')
    @include('components.new-training-form')
    @include('components.edit-training-form')
    @include('components.delete-training-form')

@endsection