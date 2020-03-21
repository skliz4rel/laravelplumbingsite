@extends('layouts.master')

@section('content')
	<h1>Page Title {{ $title }}</h1>h1>
	<hr/>


	@foreach ($lessons as $value)

	<h2> {{ $value }} </h2>

	@endforeach


	<br/>

	@if(1+1== 2)

		<span>1 + 1 = 2</span>
	@endif


@stop
