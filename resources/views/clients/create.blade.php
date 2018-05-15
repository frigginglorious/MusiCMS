@extends('layouts.admin')

@section('content')

<h2>Add New Client</h2>

{!! Form::open(['action' => 'ClientController@store', 'method'=>'POST','files'=>'true']) !!}
  <div class="form-group">
    <input name="name" class="form-control" placeholder="Name" required></input>
  </div>
  <div class="form-group">
    <input name="url" class="form-control" placeholder="http://URL.com" required></input>
  </div>
  <div class="form-group">
    <label for="pic" class="control-label">Select a File</label>
    {!! Form::file('pic', array('class'=>'form-control', 'required'=>'true')) !!}
    <!-- <input id="pic" name="pic" type="file" class="form-control"> -->
  </div>


  @foreach($roles as $role)
    <div class="checkbox">
      <label><input type="checkbox" name="role[]" value="{{$role->id}}" required>{{ $role->name }}</label>
    </div>
  @endforeach
  {{ Form::token()}}

<button type="submit">Submit</button>

{!! Form::close() !!}

<script>
  $('button[type="submit"]').on('click', function() {
    console.log("submitted");

    $cbx_group = $("input:checkbox[name='role[]']");
    // $cbx_group = $("input:checkbox[id^='role-']"); // name is not always helpful ;)

    $cbx_group.prop('required', true);
    if($cbx_group.is(":checked")){
      $cbx_group.prop('required', false);
    }
  });
</script>
@endsection
