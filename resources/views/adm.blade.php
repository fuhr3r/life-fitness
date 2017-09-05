@extends('layouts.app')

@section('content')

<div class="ui fixed inverted menu">
    <div class="ui container">
        <div class="header item disabled">
            {{--<img class="ui mini circular image konata" src="images/maxresdefault.jpg">--}}
            <span class="main title">Home</span>
        </div>
        <div class="right menu">
            <div class="ui item">
                <i class="undo icon"></i>
            </div>
            <div class="ui item">
                <i class="undo icon"></i>
            </div>
        </div>
    </div>
</div>

<div id="first" class="ui top attached tabular menu">
    <a class="item active" data-tab="first">First</a>
    <a class="item" data-tab="second">Second</a>
    <a class="item" data-tab="third">Third</a>
</div>
<div class="ui bottom attached tab segment active" data-tab="first">
    First
</div>
<div class="ui bottom attached tab segment" data-tab="second">
    Second
</div>
<div class="ui bottom attached tab segment" data-tab="third">
    Third
</div>
@endsection