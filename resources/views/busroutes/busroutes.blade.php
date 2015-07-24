@extends('master')

@section('content')
    <h1>Bus Routes</h1>


    <hr/>


    @foreach ($routes as $route)
      <routes>
        <h2>

          <a href="{{url('/routes',$route->id)}}"> {{ $route->day }} </a>

         </h2>

         <div class="body">{{ $route->out_stgeorges }}</div>

      </routes>

    @endforeach



@stop
