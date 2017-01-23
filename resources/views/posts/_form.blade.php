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
  {!! Form::label('published_at', 'Publishing date') !!}
  {!! Form::date('published_at', $post->published_at ? $post->published_at.'' : \Carbon\Carbon::now().'' , ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('tag_list', 'Tags:') !!}
  {!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control', 'multiple']) !!}
</div>

<div class="form-group">
  {!! Form::submit($submitButtonText, ['class' => 'btn btn-large btn-primary btn-block']) !!}
  {!! Form::close() !!}
</div>