@extends('master')

@section('content')
  <h1>New Alert </h1>

  <hr/>

  {!! Form::open(['url' => 'alerts']) !!}
    <div class="form-group">

      {!! Form::label('title', 'Title:') !!}
      {!! Form::text('title', null, ['class' => 'form-control']) !!}


    </div>


    <!-- Body Form Input -->
    <div class="form-group">

      {!! Form::label('body', 'Body') !!}
      {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

    </div>

    <!-- P Form Input -->
    <div class="form-group">

      {!! Form::label('post_at', 'Post On:') !!}
      {!! Form::input('post_at', 'post_at)', date('d-m-y'), ['class' => 'form-control']) !!}

    </div>

    <!-- Add Alert Form Input -->
    <div class="form-group">

      {!! Form::submit('Add Alert', ['class' => 'btn btn-primary form-control']) !!}

    </div>


  {!! Form::close() !!}


@stop
