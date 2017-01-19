@extends('layouts.app')

@section('content')
  <div class="row col-md-6">
    <h2>New Post</h2>

    @include('errors.list')
    {!! Form::open(['method' => 'POST', 'route' => 'posts.store', 'files'=>true]) !!}
    @include ('posts/_form', ['submitButtonText' => 'Hinzufügen'])
  </div>
@stop