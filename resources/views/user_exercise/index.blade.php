@forelse($exercises as $exercise)
    nome: <span>{{$exercise->name}}</span><br>
    parte: <span>{{$exercise->part->name}}</span><br>
    <a href="/exercise/{{$exercise->id}}">show</a>
    <a href="/exercise/{{$exercise->id}}/edit">update</a>
    {{ Form::open(['method' => 'DELETE', 'route' => ['exercise.destroy', $exercise->id] ]) }}
        {{ Form::hidden('id', $exercise->id) }}
        {{ Form::submit('Delete') }}
    {{ Form::close() }}
    <br>
@empty
    Vazio
@endforelse