@extends('layouts.admin')

@section('content')
  {!! Form::model($gear, ['route' => ['gear.update', $gear->id], 'method'=>'PUT','files'=>'true']) !!}
    <div class="form-group">
      <input name="name" class="form-control" placeholder="{{$gear->name}}"></input>
    </div>
    <div class="form-group">
      <input name="short_description" class="form-control" placeholder="{{$gear->short_description}}"></input>
    </div>
    {{-- <div class="form-group">
      <input name="path" class="form-control" placeholder="{{$gear->path}}"></input>
    </div> --}}
    {{-- <div class="form-group"> --}}
      {{-- <label for="pic" class="control-label">Select a File</label>
      <img class="bandImg" src="/uploads/bandPics/{{$gear->pic}}"/>
      {!! Form::file('pic', array('class'=>'form-control')) !!} --}}
      <!-- <input id="pic" name="pic" type="file" class="form-control"> -->
    {{-- </div> --}}


    @foreach($types as $type)
      <div class="radio">
        @if($type->id == $gear->type_id)
          <label><input type="radio" name="type_id" value="{{$type->id}}" checked="true">{{ $type->name }}</label>
      @else
          <label><input type="radio" name="type_id" value="{{$type->id}}">{{ $type->name }}</label>

        @endif
      </div>
    @endforeach
    {{ Form::token()}}

  <button type="submit">Save</button>

  {!! Form::close() !!}

@endsection
