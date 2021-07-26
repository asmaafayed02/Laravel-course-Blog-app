@extends('layout.app')
@section('content')
<form class='container' method='post' action='{{route("posts.store")}}'>
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" name='title' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">description</label>
    <textarea name="description"  id="" cols="10" rows="5" class='form-control'></textarea>
  </div>
  <div class="mb-3">
    <label for="post-creator" class="form-label">post creator</label>
    <select name='user_id' class='form-control'>
    @foreach($users as $user)
        <option value='{{$user->id}}'>{{$user->name}}</option>
    @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-success">create</button>
</form>
@endsection