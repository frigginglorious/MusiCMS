@extends('layouts.admin')

@section('content')

<h1>All Roles</h1>
<ul>
@foreach ($roles as $r)

<li>
<a href="roles/{{$r->id}}/edit">{{$r->name}}</a>
</li>

@endforeach
</ul>
<a href="roles/create">Create</a>

@endsection