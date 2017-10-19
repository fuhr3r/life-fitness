    {{ Form::open(['method' => 'PUT', 'route' => ['exercise.update', $exercise->id] ]) }}
        {{ Form::hidden('id', $exercise->id) }}
        nome:
        {{ Form::text('name', $exercise->name) }}

        {!! Form::select('part', $parts, $exercise->part) !!}

        {{ Form::submit('Atualizar') }}
    {{ Form::close() }}
    <br>