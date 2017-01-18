@extends('layouts.app')

@section('content')
    <h2>Posts</h2>
    <div class="table-responsive">
        @foreach($posts as $post)
            {{ $post->title }} <br>
        @endforeach
    </div>
@stop