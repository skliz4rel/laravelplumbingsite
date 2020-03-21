@extends('layouts.master')

@section('content')
	
	<hr>

	<a href="{{ route('songlist') }}">All songs</a>

	<h2>Song Name is [ {{ $song->title }} ]</h2>

	<br/>

	@if($song->lyrics)
		<article class="lyrics">
			{!! nl2br($song->lyrics) !!}
		</article>
	@endif

@stop