@extends('layouts.admin')

@section('content')

	<h3><a href="/gear/create">Add New gear</a></h3>


	<h2>Gears By Type</h2>


@foreach($types as $type)
	<h3>{{$type->name}}</h3>
	@foreach($type->gear as $gear)
		<li><a href="/gear/{{$gear->id}}">{{$gear->name}}</a>(<a href="/gear/{{$gear->id}}/edit">Edit</a>)</li>

		<form action="{{ URL::route('gear.destroy',$gear->id) }}" method="POST">
		    <input type="hidden" name="_method" value="DELETE">
		    <input type="hidden" name="_token" value="{{ csrf_token() }}">
		    <button>Delete</button>
		</form>
	@endforeach

@endforeach


@endsection
