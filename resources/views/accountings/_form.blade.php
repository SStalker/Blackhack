<div class="form-group">
  {!! Form::label('description', '* Beschreibung') !!}
  {!! Form::textarea('description', null, ['class' => 'form-control ckeditor']) !!}
</div>

<div class="form-group">
  {!! Form::label('amount', 'Wert') !!}
  {!! Form::text('amount', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('type', 'Art:') !!}
  {!! Form::select('type', $types, null, ['id' => 'type', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('period', 'Rythmus:') !!}
  {!! Form::select('period', $periods, null, ['id' => 'peroid', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('startdate', 'Startdatum') !!}
  {!! Form::date('startdate', null , ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('enddate', 'Enddatum') !!}
  {!! Form::date('enddate', null , ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::submit($submitButtonText, ['class' => 'btn btn-large btn-primary btn-block']) !!}
  {!! Form::close() !!}
</div>

@section('footer')
  <script>
    /*$('#tag_list').select2({
      placeholder: 'Choose a tag'
    });*/
  </script>
@endsection