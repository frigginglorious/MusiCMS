
<h1>Create Page Content</h1>

{{-- {!! Form::model(['action' => 'PageContentsController@store']) !!} --}}

{!! Form::model($pageContent, ['route' => ['pageContent.store', $user->id]]) !!}
{{-- $table->integer('page_id');
$table->string('title');
$table->binary('content'); --}}

{{-- {!! Form::label('textarea', 'E-Mail Address') !!} --}}

{!! Form::hidden('id', $pc->id) !!}
{!! Form::text('title', $pc->title) !!}

{!! Form::textarea('content', $pc->content) !!}

{!! Form::submit('CREATE!') !!}
{!! Form::close() !!}