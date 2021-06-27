<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/blog', function () {
    $posts = [
        ['id' => 1, 'title' => 'laravel', 'posted by'=> 'asmaa', 'created-at' =>'27/6/2021'],
        ['id' => 2, 'title' => 'react', 'posted by'=> 'motaaz', 'created-at' =>'27/6/2021']
    ];
    return view('blog',[
        'posts'=> $posts
    ]);
});
