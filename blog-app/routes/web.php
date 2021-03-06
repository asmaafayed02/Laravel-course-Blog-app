<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', [BlogController::class, 'index'])->name('posts.index')-> middleware('auth');
Route::get('/posts/create', [BlogController::class, 'create']) -> name('posts.create')-> middleware('auth');
Route::post('/posts', [BlogController::class, 'store']) -> name('posts.store')-> middleware('auth');
Route::get('/posts/{post}', [BlogController::class, 'show']) -> name('posts.show')-> middleware('auth');
Route::delete('/posts/{post}', [BlogController::class, 'destroy']) -> name('posts.destroy')-> middleware('auth');
Route::get('/posts/showerorr/{post}', [BlogController::class, 'model']) -> name('posts.model');
Route::get('/posts/updatePage/{post}', [BlogController::class, 'updatePage']) -> name('posts.updatePage')-> middleware('auth');
Route::put('/posts/{post}', [BlogController::class, 'update']) -> name('posts.update')-> middleware('auth');
   
 
// Route::get('/blog', function () {
//     $posts = [
//         ['id' => 1, 'title' => 'laravel', 'posted by'=> 'asmaa', 'created-at' =>'27/6/2021'],
//         ['id' => 2, 'title' => 'react', 'posted by'=> 'motaaz', 'created-at' =>'27/6/2021']
//     ];
//     return view('index',[
//         'posts'=> $posts 
//     ]);
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
