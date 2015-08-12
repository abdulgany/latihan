@extends('layouts.main')



@section('content')
	<h1>your items <small>(<a href="{{ URL::route('new') }}">New task</a>)</small></h1>


 	<ul>
	 	@foreach ($items as $item)
	 		<li>
	 		{{ Form::open(array('url'=> 'item', 'method' => 'post')) }}
	 			 <input
	 			  type="checkbox"
	 			  name="item"
	 			  onclick="this.form.submit()" 
	 			  {{ $item->done ? 'checked' : '' }}
	 			   />

	 			   <input type="hidden" name="id" value="{{ $item->id }}" />
	 			 
	 			 {{ e($item->name) }} <small>(<a href="{{ URL::route('delete', $item->id) }}">x</a>)</small>
	 			 					  <small>(<a href="{{ URL::route('update', $item->id) }}">e</a>)</small>
 		{{ Form::close() }}
 		</li>
 	@endforeach
 	</ul>
 @stop 
 
