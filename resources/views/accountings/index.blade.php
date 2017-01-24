@extends('layouts.app')

@section('content')
    <h2>Einnahmen & Ausgaben</h2>
    {!! Html::link('/accountings/create', 'Neue Eingabe', array('class'=>'btn btn-primary')) !!}
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>Type</th>
            <th>Wert</th>
            <th>Wofür</th>
            <th>Ausführung</th>
            <th>Erstellt am</th>
            <th>Aktion</th>
          </tr>
        </thead>
        <tbody>
        @foreach($accountings as $accounting)
            <tr class="{{ $accounting->type ? "success" : "danger" }}">
              <a href="{{ action('AccountingController@show', $accounting->id) }}">
              <td>{{ $accounting->types()[$accounting->type] }}</td>
              <td>{{ $accounting->amount }} €</td>
              <td>{{ str_limit($accounting->description, 32) }}</td>
              <td>{{ $accounting->periods()[$accounting->period] }}</td>
              <td>{{ $accounting->created_at }}</td>
              <td>
                {{--<a href="{{ action('AccountingController@edit', [$accounting->id]) }}"
                  class="" data-title="Confirm" data-content="Are you sure?">
                  <i class="glyphicon glyphicon-cog"></i></a>
                {!! Form::open(['method' => 'DELETE', 'route' => ['accountings.destroy', $accounting->id]]) !!}
                  <a href=""><i class="glyphicon glyphicon-remove icon-spacer"></i></a>
                {!! Form::close() !!--}}
              </td>
            </tr>
        @endforeach
        </tbody>
      </table>
      {{ $accountings->links() }}
    </div>
@stop