@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="panel {{ $accounting->type ? "panel-success" : "panel-danger" }}">
      <div class="panel-heading">
        <h3 class="panel-title">{{ $accounting->types()[$accounting->type] . " von " . $accounting->amount }}</h3>
      </div>
      <div class="panel-body">
        {!! $accounting->description !!}
      </div>
      <div class="panel-footer">
        <div class="pull-left">
          Ausführung: {{ $accounting->periods()[$accounting->period] }}
        </div>
        <div class="text-right">
            {!! Html::link('/accountings/'.$accounting->id.'/edit', 'Bearbeiten', array('class'=>'btn btn-default')) !!}
            {!! Form::open(['method' => 'DELETE', 'route' => ['accountings.destroy', $accounting->id], 'style' => 'display:inline;']) !!}
                {!! Form::submit('Löschen', ['class' => 'btn btn-danger', 'onClick' =>
            'return confirm(\'Wirklich löschen?\');' ]) !!}
            {!! Form::close() !!}
        </div>
      </div>
    </div>
	</div>
@stop