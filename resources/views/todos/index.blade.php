@extends('layouts.app')

@section('content')


<h1 class="text-center text-default">The Todos</h1>



@if (count($todos) > 0)

  @foreach ($todos as $todo)
  <div class="jumbotron bg-info">
<a href="todo/{{$todo->id}}" style="font-size: 20px; color:black;">{{$todo->text}}</a>
<h3 class="alert alert-secondary"><span class="text p-2">{{$todo->due}}</span></h3>
<h4 class="alert alert-secondary"> {{$todo->body}}</h4>
</div>
  @endforeach

@endif

@endsection
