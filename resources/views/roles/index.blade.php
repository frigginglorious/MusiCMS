@extends('layouts.admin')

@section('content')

<h1>All Roles</h1>
<table>
@foreach ($roles as $r)
<tr>
    <td>
        <a href="/admin/roles/{{$r->id}}/edit">{{$r->name}}</a>
    </td>
    <td>
        <form action="{{ URL::route('roles.destroy',$r->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button>Delete</button>
        </form>
    </td>
</tr>
@endforeach
</table>
<a href="/admin/roles/create">Create</a>

@endsection