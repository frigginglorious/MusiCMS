@extends('layouts.admin')

@section('content')

	<h2>All Artists</h2>

<ul>
@foreach($clients as $client)

	<li><a href="artists/{{$client->id}}">{{$client->name}}</a>(<a href="artists/{{$client->id}}/edit">Edit</a>)</li>

	<form action="{{ URL::route('artists.destroy',$client->id) }}" method="POST">
	    <input type="hidden" name="_method" value="DELETE">
	    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	    <button>Delete</button>
	</form>
@endforeach
</ul>
<a href="/admin/artists/create">Add New Artist</a>

@endsection