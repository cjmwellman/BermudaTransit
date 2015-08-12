@extends('master')


@section('content')

  <h1>Alerts</h1>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <ul class="nav navbar-nav navbar-right">

      <li><a class="menu" href="{{url('/')}}"> home </a></li>
      <li><a class="menu" href="{{url('/busFare')}}">bus fare</a></li>
      <li><a class="menu" href="{{url('/busSchedule')}}"> bus schedule </a></li>
      <li><a class="menu" href="{{url('/howToride')}}"> how to ride </a></li>
      <li><a class="menu" href="{{url('/contact')}}">contact us</a></li>
      <li><a class="menu active" href="{{url('/alerts')}}">alerts</a></li>
      <li><a class="menu" href="{{url('/about')}}"> about us</a></li>

    </ul>
  </div>

  <h2>
    <a href="{{url('/alerts/create')}}">Create New Alert </a>
  </h2>

  <hr/>

  @foreach ($alerts as $alert)
    <alert>
      <h2>
        <a href="{{url('/alerts',$alert->id)}}">{{$alert->title}} </a>
      </h2>


      <div class="body"> {{ $alert->body}} </div>

    </alert>

  @endforeach


@section('footer')


@stop
