@extends('master')

@section('content')
     <h1>{{ $alert->title }}</h1>

      <hr/>

      <alerts>

        {{ $alert->body }}

      </alerts>

@stop
