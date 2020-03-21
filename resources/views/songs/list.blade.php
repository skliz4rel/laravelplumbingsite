@extends('layouts.master')

@section('content')
	<h1>Justin Bieber Official Songs</h1>


This is the first time

<ul>
	@foreach($songs as $item)

		<li><a href="/asong/{{ $item->id }}">{{ $item->title }}</a></li>

	@endforeach

</ul>


@stop