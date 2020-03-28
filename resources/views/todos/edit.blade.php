@extends('layouts.app')

@section('content')

   <h1>Edit Todo</h1>

   {!! Form::open(['action' => ['TodosController@update',$todo->id ], 'method' => 'POST']) !!}
     {{ Form::bsText('text',$todo->text) }}
     {{ Form::bsText('due',$todo->due) }}
     {{ Form::bsTextArea('body',$todo->body) }}
     {{ Form::hidden('_method', 'PUT') }}
     {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}

@endsection
