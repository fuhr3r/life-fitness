@foreach($users as $user)
    {{$user->name}}    <a href="/user/{{$user->id}}/exercise">Exercícios</a><br>
@endforeach