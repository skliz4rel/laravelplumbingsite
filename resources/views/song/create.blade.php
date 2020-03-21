@extends('layouts.master')

@section('content')
	
	<h2>Add a new Song</h2>

	
	{!! Form::model($song, [ 'route'=> ['updater',$song->slug],'method' => 'PATCH' ])  !!}

		{{ csrf_field() }}

		<div class="form-group">
			{!! Form::text('title',null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::textarea('lyrics',null,['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Update Song',null,['class'=>'btn btn-success']) !!}
		</div>


	{!! Form::close() !!}

@stop