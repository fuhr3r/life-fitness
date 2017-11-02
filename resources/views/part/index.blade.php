@extends('layouts.trainer-app')

@section('content')

    <div class="ui body part container" id="first">
        <div class="ui segments">
            @forelse($parts as $part)
                <div class="ui options wrapper body part segment">
                    <span>{{$part->name}}</span>
                    {{--<a href="/part/{{$part->id}}">show</a>--}}
                    {{--<a href="/part/{{$part->id}}/edit"></a>--}}
{{--                    {{ Form::open(['method' => 'DELETE', 'route' => ['part.destroy', $part->id] ]) }}--}}
{{--                    {{ Form::hidden('id', $part->id) }}--}}
                    {{--{{ Form::submit('Delete') }}--}}
                    {{--{{ Form::close() }}--}}
                    <div class="container options">
                        <i class="trash outline icon action"></i>
                        <i class="edit training icon action"></i>
                    </div>

                </div>
            @empty
                Não há partes do corpo cadastradas
            @endforelse
        </div>
        <div class="ui segments">
            <div class="ui segment">
                aaaaaaaaaaaaaaa
            </div>

            <div class="ui segment">
                aaaaaaaaaaaaaaa
            </div>
            <div class="ui segment">
                aaaaaaaaaaaaaaa
            </div>
        </div>
    </div>

@endsection