@extends('layouts.trainer-app')

@section('content')

    <div class="ui body training container" id="first">
        <div class="ui part segments">
            @forelse($parts as $part)
                <div class="ui options wrapper body part segment ">
                    <span data-id="{{$part->id}}">{{$part->name}}</span>
                    {{--<a href="/part/{{$part->id}}">show</a>--}}
                    {{--<a href="/part/{{$part->id}}/edit"></a>--}}
{{--                    {{ Form::open(['method' => 'DELETE', 'route' => ['part.destroy', $part->id] ]) }}--}}
{{--                    {{ Form::hidden('id', $part->id) }}--}}
                    {{--{{ Form::submit('Delete') }}--}}
                    {{--{{ Form::close() }}--}}
                    <div class="container options">
                        <i class="delete trash exercise outline icon action"></i>
                        <i class="edit exercise icon action"></i>
                    </div>

                </div>
            @empty
                Não há partes do corpo cadastradas
            @endforelse
        </div>
        <div class="ui training segments">
            Selecione uma parte do corpo
        </div>
    </div>

    @include('components.edit-exercise-form')

@endsection