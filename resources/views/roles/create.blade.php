@extends('layouts.admin')

@section('content')
<h1>Create Artist Role</h1>

{{-- {!! Form::model(['action' => 'PageContentsController@store']) !!} --}}

{!! Form::model($role, ['route' => ['roles.store']]) !!}
{{-- $table->integer('page_id');
$table->string('title');
$table->binary('content'); --}}

{{-- {!! Form::label('textarea', 'E-Mail Address') !!} --}}
{!! Form::text('name', 'Name Entry') !!}
{!! Form::text('icon', 'Icon Entry', array('class' => 'icon', 'id' => 'theIcon')) !!}


{!! Form::submit('Create!') !!}
{!! Form::close() !!}


<script src='/js/fontawesome-iconpicker.min.js'></script>

<script>
    $('.icon').iconpicker();
</script>
@endsection