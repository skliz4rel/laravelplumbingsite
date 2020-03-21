	@extends('layouts.master')

@section('content')
	

<ul>
	@foreach($songs as $item)

		<li><a href="{{ route('showone',[$item->slug ])}}">{{ $item->title }}</a>  &nbsp;  


		[<a href="{{ route('songedit',[$item->slug ])}}">edit</a>]    &nbsp;  

		[<a href="{{ route('showone',[$item->slug ])}}">view</a>]

		</li>

	@endforeach
</ul>

@stop