@extends('master')

@section('content')

  <h1>Timetable</h1>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <ul class="nav navbar-nav navbar-right">

      <li><a class="menu" href="{{url('/')}}"> home </a></li>
      <li><a class="menu" href="{{url('/busFare')}}">bus fare</a></li>
      <li><a class="menu active" href="{{url('/busSchedule')}}"> bus schedule </a></li>
      <li><a class="menu " href="{{url('/howToride')}}"> how to ride </a></li>
      <li><a class="menu" href="{{url('/contact')}}">contact us</a></li>
      <li><a class="menu" href="{{url('/alerts')}}">alerts</a></li>
      <li><a class="menu" href="{{url('/about')}}"> about us</a></li>

    </ul>
  </div> <!-- /navbar-collapse -->


<hr/>

  <!-- <h1>weekday</h1>
  @foreach ($weekday as $time)
    {{$time->time}}
  @endforeach -->


  <!-- <h1>saturday</h1>
  @foreach ($saturday as $time)
    {{$time->time}}
  @endforeach -->

  <!-- <h1>sunday</h1>
  @foreach ($sunday as $time)
    {{$time->time}}
  @endforeach -->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Timetable</h2>
  <h2>
    {{$route->number}}
    {{$route->name}}
  </h2>
  
  <p>Inbound is all traffic heading into central Hamilton </p>
  <p>Outbound is all traffic heading out of central Hamilton </p>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Weekday</th>
        <th>Direction</th>

        <th>Saturday</th>
        <th>Direction</th>

        <th>Sunday</th>
        <th>Direction</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
            @foreach ($weekday as $time)
              <li>
                {{$time->time}}
              </li>
            @endforeach
        </td>

        <td>
          @foreach ($weekday as $direction)
            <li>
              {{$direction->direction}}
            </li>
          @endforeach
        </td>

        <td>
          @foreach ($saturday as $time)
            <li>
              {{$time->time}}
            </li>
          @endforeach
        </td>

        <td>
          @foreach ($saturday as $direction)
            <li>
              {{$direction->direction}}
            </li>
            @endforeach
        </td>

        <td>
          @foreach ($sunday as $time)
            <li>
              {{$time->time}}
            </li>
            @endforeach
        </td>

        <td>
          @foreach ($sunday as $direction)
            <li>
              {{$direction->direction}}
            </li>
            @endforeach
        </td>

      </tr>

      <!-- <tr>
        <td>This is blank</td>

        <td>Moe</td>
        <td>mary@example.com</td>
      </tr> -->
      <!-- <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr> -->
    </tbody>
  </table>
</div>

</body>


@section('footer')


</html>
