<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/blog', function () {
    $articles = Post::all();
    return view('blog', ['title' => 'Blog'], ['blogs'=>$articles]);
});

Route::get('/userBlog/{user}', function (User $user) {
    return view('blog', ['title' => "Article by ". $user->name, "blogs" => $user->blogs]);
});

Route::get('/blog/{post:slag}', function (Post $post) {
    return view('article', ['title' => 'Single Blog'], ['blog' => $post]);
});

Route::get('/projek', function () {
    return view('projek', ['title' => 'Project']);
});

Route::get('/reports', function () {
    return view('reports', ['title' => 'Reports']);
});