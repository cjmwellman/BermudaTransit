@extends('master')

@section('content')

  <h1> New Notification </h1>

  <hr/>

  {!! Form::open(['url' => 'routes']) !!}
    <div class="form-group">

      {!! Form::label('day', 'Day:') !!}
      {!! Form::text('day', null, ['class' => 'form-control']) !!}


    </div>


    <!-- Body Form Input -->
    <div class="form-group">

      {!! Form::label('out_stgeorges', 'Out_StGeorges') !!}
      {!! Form::textarea('out_stgeorges', null, ['class' => 'form-control']) !!}

    </div>

    <!-- P Form Input -->
    <div class="form-group">

      {!! Form::label('out_hamilton', 'Out_Hamilton') !!}
      {!! Form::input('date', 'out_hamilton)', date('d-m-y'), ['class' => 'form-control']) !!}

    </div>


    <!-- Add Route Form Input -->
    <div class="form-group">

      {!! Form::submit('Add Route', ['class' => 'btn btn-primary form-control']) !!}

    </div>



  {!! Form::close() !!}

  @if ($errors->any())
    <ul class="alert alert-danger">

      @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>

      @endforeach

    </ul>
  @endif

@stop
