@extends('layouts.app')

@section('content')
    <h2>Posts</h2>
    {!! Html::link('/posts/create', 'New Post', array('class'=>'btn btn-primary')) !!}
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>#id</th>
            <th>Title</th>
            <th>Content</th>
            <th>Imagepath</th>
            <th>published at</th>
          </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
          <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ str_limit($post->content) }}</td>
            <td>{{ $post->image_path }}</td>
            <td>{{ $post->published_at }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
      {{ $posts->links() }}
    </div>
@stop