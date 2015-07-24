<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <title>Master</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
  </head>

  <body>

    <div class="container">
    <!-- @include ('partials.flash'); -->
      @include ('flash::message');



      @yield('content')
    </div>

    <script>
      $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>



    @yield('footer')
  </body>
</html>
