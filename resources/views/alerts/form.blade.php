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

  {!! Form::label('date', 'Date On:') !!}
  {!! Form::input('date', 'date)', date('d-m-y'), ['class' => 'form-control']) !!}

</div>

<!-- Add Route Form Input -->
<div class="form-group">

  {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}

</div>
