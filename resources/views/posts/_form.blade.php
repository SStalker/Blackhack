<div class="form-group">
  {!! Form::label('title', '* Titel') !!}
  {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('content', 'Beschreibung') !!}
  {!! Form::textarea('content', null, ['class' => 'form-control ckeditor']) !!}
</div>

<div class="form-group">
  {!! Form::label('image_path', 'Bilderpfad') !!}
  {!! Form::file('image') !!}
  {{--!! Form::text('image_path', null, ['class' => 'form-control']) !!--}}
</div>

<div class="form-group">
  {!! Form::label('published_at', 'Veröffentlicht am') !!}
  {!! Form::date('published_at', $post->published_at ? $post->published_at.'' : \Carbon\Carbon::now().'' , ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('tag_list', 'Tags:') !!}
  {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
</div>

<div class="form-group">
  {!! Form::submit($submitButtonText, ['class' => 'btn btn-large btn-primary btn-block']) !!}
  {!! Form::close() !!}
</div>

@section('footer')
  <script>
    $('#tag_list').select2({
      placeholder: 'Choose a tag'
    });
  </script>
@endsection