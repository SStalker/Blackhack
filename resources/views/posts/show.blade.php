@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-3 centered pull-left">
				<img class="img-thumbnail" src="{!! url( 'images/' .$post->image_path) !!}" alt="No image available">
			</div>
      <div class="col-md-9">
        <div class="col-md-12">
            <h3>{!! $post->title !!}</h3>
        </div>
        <div class="col-md-12 p-descript">
          <p>{!! $post->content !!}</p>
        </div>
      </div>

		</div>
        @if(Auth::user() {{--&& Auth::user()->hasRole('admin')--}})
            <br/>
            <hr/>
            <div class="row">
                <div class="pull-right">
                    {!! Html::link('/posts/'.$post->id.'/edit', 'Bearbeiten', array('class'=>'btn btn-default')) !!}
                    {!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id], 'style' => 'display:inline;']) !!}
                        {!! Form::submit('Löschen', ['class' => 'btn btn-danger', 'onClick' =>
                    'return confirm(\'Wirklich löschen?\');' ]) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        @endif
	</div>
@stop