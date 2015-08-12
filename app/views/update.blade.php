@extends('layouts.main')

@section('content')
	<h1> Edit </h1>
	@foreach ($errors->all() as $error)
 		<p class="error">{{ $error }}</p>
 	@endforeach

	{{ Form::open(array('url'=> 'update', 'method' => 'post')) }}
		<input type="text" name="name" value="{{ $item->name }}" placeholder="the name of your text" />
		<input type="hidden" name="id" value="{{ $item->id }}" />
		<input type="submit" value="Create">
	{{ Form::close() }}

@stop 