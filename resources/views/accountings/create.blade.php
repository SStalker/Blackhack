@extends('layouts.app')

@section('content')
  <div class="row col-md-6">
    <h2>Neue Einnahme oder Ausgabe</h2>

    @include('errors.list')
    {!! Form::open(['method' => 'POST', 'route' => 'accountings.store']) !!}
    @include ('accountings/_form', ['submitButtonText' => 'Hinzufügen'])
  </div>
@stop