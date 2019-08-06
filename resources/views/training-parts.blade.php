@extends('layouts.trainer-app')

@section('content')

    <div class="ui body training container" id="first">
        <div class="ui part segments">
            @forelse($parts as $part)
                <div data-part-id="{{$part->id}}" class="ui options wrapper body part segment">
                    <span>{{$part->name}}</span>
                    <div class="container options">
                        <i class="delete trash part outline icon action"></i>
                        <i class="edit part icon action"></i>
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
    @include('components.delete-exercise-form')
    @include('components.edit-part-form')
    @include('components.delete-part-form')

@endsection