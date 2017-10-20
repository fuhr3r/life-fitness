@forelse($parts as $part)
    <span>{{$part->name}}</span>
    <a href="/part/{{$part->id}}">show</a>
    <a href="/part/{{$part->id}}/edit">update</a>
    {{ Form::open(['method' => 'DELETE', 'route' => ['part.destroy', $part->id] ]) }}
        {{ Form::hidden('id', $part->id) }}
        {{ Form::submit('Delete') }}
    {{ Form::close() }}
    <br>
@empty
    Vazio
@endforelse