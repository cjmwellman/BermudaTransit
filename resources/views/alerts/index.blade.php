@extends('btmaster')

@section('content')

  <h1>Alerts</h1>

  <hr/>

  @foreach ($alerts as $alert)
    <alert>
      <h2>
        <a href="#">{{$alert->title}} </a>
      </h2>


      <div class="body"> {{ $alert->body}} </div>

    </alert>

  @endforeach

@stop
