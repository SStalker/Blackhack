@extends('layouts.app')

@section('title', 'Startseite')

@section('content')
<h1 class="text-center">Aktuelle News</h1>
  <div class="container-fluid">
    <div class="row">
      <hr>
      <ul>
        @foreach ($posts as $post)
          <li>
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            <em>({{ $post->published_at }})</em>
            <p>
              {{ str_limit($post->content) }}
            </p>
          </li>
        @endforeach
      </ul>
      <hr>
      </div>
      </div>
  </div>
@stop
