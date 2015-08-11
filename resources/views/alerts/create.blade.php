@extends('master')

@section('content')

  <h1> New Alert </h1>

  <hr/>

  {!! Form::open(['url' => 'alerts']) !!}

    @include ('alerts.form', ['submitButtonText' => 'Add Alert'])


  {!! Form::close() !!}

@include ('errors.list')

@stop
