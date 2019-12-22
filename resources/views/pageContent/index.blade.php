@extends('layouts.admin')

@section('content')
<h1>All Page Contents</h1>
<ul>
@foreach ($pageContent as $pc)

<li>
<a href="pageContent/{{$pc->id}}/edit">{{$pc->title}}</a>
</li>

@endforeach
</ul>
<a href="pageContent/create">Create</a>
@endsection