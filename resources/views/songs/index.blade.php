@extends('layouts.master')

@section('content')
	<h1>Justin Bieber Official Songs</h1>


<ul>
	@foreach($songs as $index => $item)

		<li><a href="/songs/{{ $index }}">{{ $item }}</a></li>

	@endforeach

</ul>


@stop