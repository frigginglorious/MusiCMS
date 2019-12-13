
<h1>Edit Artist Role</h1>

{{-- {!! Form::model(['action' => 'PageContentsController@store']) !!} --}}

{!! Form::model($role, ['route' => ['roles.store']]) !!}


{!! Form::hidden('id', $r->id) !!}
{!! Form::text('name', $r->name) !!}

{!! Form::text('icon', $r->icon) !!}

{!! Form::submit('SAVE!') !!}
{!! Form::close() !!}


{!! Form::model($role, ['route' => ['roles.destroy', $role]],'DELETE') !!}
{!! Form::submit('DELETE!') !!}
{!! Form::close() !!}
