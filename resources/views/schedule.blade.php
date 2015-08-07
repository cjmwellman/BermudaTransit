@extends('master')

@section('content')

  <h1>Schedule</h1>

  <hr/>

  @foreach ($routes as $route)
    <alert>
      <h2>
        <a href="/timetable/{{$route->id}}">{{$route->name}} </a>
      </h2>


      <div class="body"> {{ $route->detail}} </div>

    </alert>

  @endforeach

@stop
