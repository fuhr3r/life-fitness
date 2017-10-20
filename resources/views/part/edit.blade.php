    {{ Form::open(['method' => 'PUT', 'route' => ['part.update', $part->id] ]) }}
        {{ Form::hidden('id', $part->id) }}
        nome:
        {{ Form::text('name', $part->name) }}
        {{ Form::submit('Atualizar') }}
    {{ Form::close() }}
    <br>