@extends('layouts.app')

@section('title', 'Frage anzeigen')

@section('content')

    @if($errors->any() || empty($results))
        <h1>Keine Suchergebnisse</h1>
    @else
        <h1>Suche nach &bdquo;{{ $query }}&ldquo;</h1>

        <div class="table">
            <h2>Posts</h2>
            <table class="table table-striped table-middle">
                <tbody class="table-hover">
                @foreach($results as $result)
                    <tr>
                        <td>
                            <a class="block-link" href="{{ action('PostController@show', [$result->id]) }}">{{ $result->title }}</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif

@endsection