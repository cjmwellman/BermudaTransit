@extends('master')

@section('content')

  <h1>Timetable</h1>

<hr/>

  {{$route->name}}
  <h1>weekday</h1>
  @foreach ($weekday as $time)

  {{$time->time}}

  @endforeach

  <h1>saturday</h1>
  @foreach ($saturday as $time)

  {{$time->time}}

  @endforeach

  <h1>sunday</h1>
  @foreach ($sunday as $time)

  {{$time->time}}

  @endforeach



@section('footer')

@end
