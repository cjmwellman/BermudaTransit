@extends('master')


@section('content')

    <h1> Make New Edit</h1>

    {!! Form::model($notification,['method' => 'PATCH', 'action' => ['NotificationsController@update', $notification->id]]) !!}

      @include('notifies.form', ['submitButtonText' => 'Update Notification'])


    {!! Form::close() !!}

@include('errors.list')

@stop
