<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StorePostRequest;


class BlogController extends Controller
{
    public function index(){
        $posts = Post::all() ;
        return view('posts.index',[
            'posts'=> $posts
        ]); 
    }
    public function show($post){
        $post = Post::find($post);
        return view('posts.show',[
            'post' => $post
        ]);
    }
    public function create(){
        return view('posts.create',[
            'users'=> User::all()
        ]);
    }
    public function store(StorePostRequest $request){
        //get the data
        $data=$request->all();
        // Post::create([
        //     'title'=> $request['title'],
        //     'description' => $request['description']
        // $request->validate([
        //     'title'=> ['required','min:3'],
        //     'description'=> 'required'
        // ],[
        //     'title.min'=>'at least 3 charcters is must in title field'
        // ]);
        // ]);
        //anthersyntax
        Post::create($data);
        //insert to db
        return redirect()->route('posts.index');
    }
    public function model($post){
        $post = Post::find($post);

        return view('posts.destroy',[
            'post' => $post
        ]);
    }
    public function destroy($post){
        // $post = Post::destroy($post);
       Post::find($post)->delete();
      
      // dd($post);
      
     return redirect()->route('posts.index');

    }
    public function updatePage($post){
        $post = Post::find($post);
        $user = User::all();
        // $post->update(['post'=>$post]);
        return view('posts.update',[
            'post' => $post,
            'users'=> $user

        ]); 
    }
    public function update($post ,Request $request){
        $requestData = $request->all();
        dd($requestData);
        Post::find($post)->update([
            'title'=> $requestData['title'],
            'description'=> $requestData['description'],
             'user_id' => $requestData['user_id']
        ]);
        return redirect()->route('posts.index');

    }
}
