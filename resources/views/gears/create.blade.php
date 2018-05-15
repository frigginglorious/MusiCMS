@extends('layouts.admin')

@section('content')

<h2>Add New Gear</h2>

{!! Form::open(['action' => 'GearController@store', 'method'=>'POST','files'=>'true']) !!}
  <div class="form-group">
    <input name="name" class="form-control" placeholder="Name" required></input>
  </div>
  <div class="form-group">
    <input name="short_description" class="form-control" placeholder="Short Description"></input>
  </div>


  @foreach($types as $type)
    <div class="radio">
      <label><input type="radio" name="type_id" value="{{$type->id}}" required>{{ $type->name }}</label>
    </div>
  @endforeach
  {{ Form::token()}}

<button type="submit">Submit</button>

{!! Form::close() !!}


@endsection
