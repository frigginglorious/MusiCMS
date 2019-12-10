
<h1>Create Page Content</h1>

{{-- {!! Form::model(['action' => 'PageContentsController@store']) !!} --}}

{!! Form::model($pageContent, ['route' => ['pageContent.store', $user->id]]) !!}
{{-- $table->integer('page_id');
$table->string('title');
$table->binary('content'); --}}

{{-- {!! Form::label('textarea', 'E-Mail Address') !!} --}}
{!! Form::text('title', 'Title Entry') !!}

{!! Form::textarea('content', 'Content Entry') !!}

{!! Form::submit('Click Me!') !!}
{!! Form::close() !!}