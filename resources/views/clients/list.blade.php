@extends('layouts.admin')

@section('content')

	<h2>All Clients</h2>


@foreach($clients as $client)

	<li><a href="/clients/{{$client->id}}">{{$client->name}}</a>(<a href="/clients/{{$client->id}}/edit">Edit</a>)</li>

	<form action="{{ URL::route('clients.destroy',$client->id) }}" method="POST">
	    <input type="hidden" name="_method" value="DELETE">
	    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	    <button>Delete</button>
	</form>
@endforeach

<a href="/clients/create">Add New Client</a>
