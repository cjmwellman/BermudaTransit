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
  <h2>Timetables</h2>
  <p>Timetables under construction</p>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Weekday</th>
        <th>Saturday</th>
        <th>Sunday</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>

</body>


@section('footer')

@end

</html>
