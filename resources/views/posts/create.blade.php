@extends('layouts.app')

@section('content')
    <h2>Neuen Post</h2>

    @include('errors.list')
    {!! Form::open(['method' => 'POST', 'route' => 'posts.store']) !!}
    @include ('posts/_form', ['submitButtonText' => 'Hinzufügen'])

@stop