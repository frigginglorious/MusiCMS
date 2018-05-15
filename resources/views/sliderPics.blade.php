@extends('layouts.admin')

@section('content')
<ul>
@foreach ($collection as $file)
    <li>{{ $file }}<img style="height: 200px;" src="/uploads/sliderPics/{{$file}}" />


    <a href="/sliderPics/destroy/{{$file}}">Destroy</a></li>
@endforeach
</ul>
{!! Form::open(['action' => 'sliderPicsController@store', 'method'=>'POST','files'=>'true']) !!}
<div class="form-group">
  <label for="pic" class="control-label">Select a File</label>
  {!! Form::file('pic', array('class'=>'form-control', 'required'=>'true')) !!}
  <!-- <input id="pic" name="pic" type="file" class="form-control"> -->
</div>
<button type="submit">Submit</button>

{{ Form::token()}}
{!! Form::close() !!}

@endsection
