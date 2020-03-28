@extends('layouts.app')

@section('content')

   <h1>Create Todos</h1>

   {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
     {{ Form::bsText('text') }}
     {{ Form::bsText('due') }}
     {{ Form::bsTextArea('body') }}
     {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}

@endsection
