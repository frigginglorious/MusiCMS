@extends('layouts.admin')



@section('content')
<script src="/tinymce/js/tinymce/tinymce.min.js"></script>

<h1>Create Page Contents</h1>

{{-- {!! Form::model(['action' => 'PageContentsController@store']) !!} --}}

{!! Form::model($pageContent, ['route' => ['pageContent.store', $user->id]]) !!}
{{-- $table->integer('page_id');
$table->string('title');
$table->binary('content'); --}}

{{-- {!! Form::label('textarea', 'E-Mail Address') !!} --}}
{!! Form::text('title', 'Title Entry') !!}

{!! Form::textarea('content', 'Content Entry', array('class' => 'fillContent', 'id' => 'theContent')) !!}

{!! Form::submit('Click Me!') !!}
{!! Form::close() !!}



<script>

tinymce.init({
  selector: '.fillContent',
  height: 500,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code jbimages'
  ],
  toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
});

</script>

@endsection