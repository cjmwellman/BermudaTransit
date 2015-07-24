@extends('master')

@section('content')
    <h1>Notifications Announcements</h1>

  <hr/>

    @foreach ($notifications as $notification)
      <notification>

        <h2>
           <a href="{{url('/notifies',$notification->id)}}"> {{$notification->title}} </a>
        </h2>
    
        <div class="body"> {{ $notification->info }}</div>

      </notification>

    @endforeach


@stop
