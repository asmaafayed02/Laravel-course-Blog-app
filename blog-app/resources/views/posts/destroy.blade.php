@extends('layout.app')
@section('content')
<div class="modal d-block" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
      </div>
      <div class="modal-body">
        <p>do you want to delete this data?</p>
      </div>
    
       <form action="{{route('posts.destroy',['post'=> $post['id']])}}" method="post" class='d-inline'>
                        @csrf
                        <input type="hidden" name="_method" value='DELETE'>
                    
                    <div class="modal-footer">
        <a href="{{route('posts.index')}}" type="" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
        <button type="submit" class="btn btn-primary">Ok</button>
      </div>
                    </form>
    </div>
  </div>
</div>
@endsection