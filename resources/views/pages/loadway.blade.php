@extends('layouts.master')

@section('content')

	@foreach ($lessons as $value)

	<h2> {{ $value }} </h2>

	@endforeach

<hr/>

	<h3>{{ $name }}</h3>


<hr/>

<h4>{{ $Address }}</h4>