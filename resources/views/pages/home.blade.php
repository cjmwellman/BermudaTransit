@extends('btmaster')

@section('content')

<?php header('Location:$url'); ?>

    <a href="{{url('/about')}}"> About </a> | <a href="{{url('/contact')}}"> Contact </a>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li><a class="menu active" href="{{url('/busschedule')}}"> bus schedule </a></li>
        <li><a class="menu" href="{{url('/busfare')}}"> bus fare </a></li>
        <li><a class="menu" href="{{url('/about')}}"> our services </a></li>
        <li><a class="menu" href="{{url('/contact')}}"> our team </a></li>
      </ul>
    </div><!-- /navbar-collapse -->


    <h1>Home</h1>

    <p>This is a bit of text to determine the contact me page </p>

    <h2> Bermuda Transit </h2>

    <p>

      Before boarding a bus, be sure to read the front destination sign to ensure that you are travelling in the right direction and on the correct route.
      You may need to change buses to get to your final destination. If you are traveling from Hamilton to St. David's you may have to change buses at the entrance to St. Davidís.

    </p>

    <p>

      The destination sign on the side of the bus displays the second portion of work that the bus will complete.
      If this is contrary to your final destination, you must ask for a transfer at the time of paying the fare.
      A transfer is a small slip of paper that indicates the time the transfer is to be made, and the zone of the final destination.
      It is used for a continuous journey and does not allow for a stop-over.
      It will display a 15 minute timeframe in which you must catch your connecting bus.
      If a transfer has expired, you will be required to pay the fare to your destination
      unless you are travelling at a time when the buses are not travelling in 15 minute intervals.

    </p>

@stop

@section('footer')

    <p>
      Copyright ©BDApp Innovations & TLF Intern Program
    </p>


@stop
