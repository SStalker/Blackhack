@extends('layouts.app')

@section('title', 'Startseite')

@section('content')
<h1 class="text-center">Aktuelle News :D</h1>
  <div class="container-fluid">
    <hr>
    @foreach ($posts as $post)
      <div class="row">
        <div class="col-md-3 centered pull-left">
          <a href="{{ action('PostController@show', $post->id) }}">
  				  <img class="img-thumbnail" src="{!! Storage::url($post->image_path) !!}" alt="No image available">
          </a>
  			</div>
        <div class="col-md-9">
          <div class="col-md-12">
            <a href="{{ action('PostController@show', $post->id) }}"><h3>{!! $post->title !!}</h3></a>
            <em>{{ $post->published_at }}</em>
          </div>
          <div class="col-md-12 p-descript">
            <a href="{{ action('PostController@show', $post->id) }}">
              <p>{!! str_limit($post->content, 128) !!}</p>
            </a>
          </div>
        </div>
      </div>
      <div class="row text-right">
        @foreach ($post->tags as $tag)
          <span class="label label-primary">{{ $tag->name }}</span>
        @endforeach
      </div>
      <hr>
    @endforeach
  </div>
@stop
