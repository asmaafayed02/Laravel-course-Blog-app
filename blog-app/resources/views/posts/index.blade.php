@extends('layout.app')
@section('content')
    <a href="{{route('posts.create')}}" class='btn btn-success '>create post </a>
    <table class="table container mt-5">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">posted by</th>
            <th scope="col">created by</th>
            <th scope="col">actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->userRelation ? $post->userRelation->name : 'user not found'}}</td>
                <td>{{$post->created_at}}</td>
                <td>
                    <a href="{{route('posts.show',['post'=> $post['id']])}}" class='btn btn-info'>view</a>
                    <!-- <a href="{{route('posts.update',['post'=> $post['id']])}}" class='btn btn-primary'>edit</a> -->
                    <!-- <form action='' method="post" class='d-inline'> -->
                        
                    
                    <a href="{{route('posts.updatePage',['post'=> $post['id']])}}" class='btn btn-primary'>edit</a>

                    <!-- </form> -->
                    <a href="{{route('posts.model',['post'=> $post['id']])}}" class='btn btn-danger'>delete</a>

                </td>
                </tr>
            @endforeach  
        </tbody>
    </table>
    
@endsection