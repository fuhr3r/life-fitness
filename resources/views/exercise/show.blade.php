@if($exercise)
id: {{$exercise->id}}<br>
nome: {{$exercise->name}}<br>
parte: {{$exercise->part->name}}<br>
@endif