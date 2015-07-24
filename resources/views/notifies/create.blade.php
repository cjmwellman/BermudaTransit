@extends('master')

@section('content')

  <h1> New Notification </h1>

  <hr/>

  {!! Form::open(['url' => 'notifies']) !!}

    @include ('notifies.form', ['submitButtonText' => 'Add Notification'])


  {!! Form::close() !!}

@include ('errors.list')

@stop
