@extends('layouts.app')

@section('content')

<div class="jumbotron mt-4">

<a href="todo/{{$todo->id}}">{{$todo->text}}</a>
<h3 class="alert alert-secondary"><span class="text-danger p-2">{{$todo->due}}</span></h3>
  <br><br>
  <a href="/" class="btn btn-primary mb-2">Go Back</a>
<a href="/todo/{{$todo->id}}/edit" class="btn btn-primary" style="float:right;">Edit Todo</a>

{!! Form::open(['action' => ['TodosController@destroy',$todo->id], 'method' => 'POST']) !!}
{{ Form::hidden('_method', 'DELETE') }}
{{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
{!! Form::close() !!}
</div>
@endsection

