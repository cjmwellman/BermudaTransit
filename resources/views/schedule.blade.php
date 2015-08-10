@extends('master')

@section('content')

  <h1>Schedule</h1>



  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <ul class="nav navbar-nav navbar-right">

      <li><a class="menu" href="{{url('/')}}"> home </a></li>
      <li><a class="menu" href="{{url('/busFare')}}">bus fare</a></li>
      <li><a class="menu" href="{{url('/busSchedule')}}"> bus schedule </a></li>
      <li><a class="menu " href="{{url('/howToride')}}"> how to ride </a></li>
      <li><a class="menu" href="{{url('/contact')}}">contact us</a></li>
      <li><a class="menu" href="{{url('/alerts')}}">alerts</a></li>
      <li><a class="menu" href="{{url('/about')}}"> about us</a></li>

    </ul>
  </div> <!-- /navbar-collapse -->

  <hr/>

  @foreach ($routes as $route)
    <alert>
      <h2>
        <a href="/timetable/{{$route->id}}">{{$route->name}} </a>
      </h2>


      <div class="body"> {{ $route->detail}} </div>

    </alert>

  @endforeach

@section('footer')


@stop
