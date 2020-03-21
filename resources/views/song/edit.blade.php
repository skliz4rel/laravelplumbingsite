@extends('layouts.master')

@section('content')

	<hr>

	<!--{!! Form::model($song, [ 'url'=>'updatesong/'.$song->slug,'method' => 'PATCH' ]) !!}  method one-->

	{!! Form::model($song, [ 'route'=> ['updater',$song->slug],'method' => 'PATCH' ])  !!}

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