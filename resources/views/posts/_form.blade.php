{!! Form::label('title', '* Titel')!!}
{!! Form::text('title', null, ['class' => 'form-control']) !!}

{!! Form::label('content', 'Beschreibung')!!}
{!! Form::textarea('content', null, ['class' => 'form-control']) !!}

{!! Form::label('image_path', 'Bilderpfad')!!}
{!! Form::text('image_path', null, ['class' => 'form-control']) !!}

<br/>
{!! Form::submit($submitButtonText, ['class' => 'btn btn-large btn-primary btn-block']) !!}
{!! Form::close() !!}