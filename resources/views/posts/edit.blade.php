@extends('layouts.app')

@section('content')
    <h2>{!! $post->title!!} ändern</h2>

    @include('errors.list')
    {!! Form::model($post, array('method' => 'PATCH', 'route' => array('posts.update', $post->id))) !!}
    @include ('posts/_form', ['submitButtonText' => 'Aktualisieren'])

@stop