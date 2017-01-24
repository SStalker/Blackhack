@extends('layouts.app')

@section('content')
    <h2>{!! $accounting->amount !!} ändern</h2>

    @include('errors.list')
      {!! Form::model($accounting, array('method' => 'PATCH', 'route' => array('accountings.update', $accounting->id))) !!}
    @include ('accountings/_form', ['submitButtonText' => 'Aktualisieren'])

@stop