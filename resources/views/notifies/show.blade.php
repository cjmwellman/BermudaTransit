@extends('master')

@section('content')
     <h1>{{$notification->title }}</h1>

      <hr/>

      <notification>

        {{$notification->info}}

      </notification>

@stop
