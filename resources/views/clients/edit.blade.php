@extends('layouts.admin')

@section('content')
  {!! Form::model($client, ['route' => ['clients.update', $client->id], 'method'=>'PUT','files'=>'true']) !!}
    <div class="form-group">
      <input name="name" class="form-control" placeholder="{{$client->name}}"></input>
    </div>
    <div class="form-group">
      <input name="url" class="form-control" placeholder="{{$client->url}}"></input>
    </div>
    <div class="form-group">
      <label for="pic" class="control-label">Select a File</label>
      <img class="bandImg" src="/uploads/bandPics/{{$client->pic}}"/>
      {!! Form::file('pic', array('class'=>'form-control')) !!}
      <!-- <input id="pic" name="pic" type="file" class="form-control"> -->
    </div>


    @foreach($roles as $role)
      <div class="checkbox">
        @if($client->getRoleIDs()->contains($role->id))
          <label><input type="checkbox" name="role[]" value="{{$role->id}}" checked="true">{{ $role->name }}</label>
        @else
          <label><input type="checkbox" name="role[]" value="{{$role->id}}">{{ $role->name }}</label>
        @endif
      </div>
    @endforeach
    {{ Form::token()}}

  <button type="submit">Save</button>

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
