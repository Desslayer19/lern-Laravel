<?php

use App\Models\Post;
use App\Models\Slag;
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
    return view('blog', ['title' => 'Blog', 'blogs'=>$articles]);
});

Route::get('/userBlog/{user:name}', function (User $user) {
    return view('blog', ['title' => "Article by ". $user->name, "blogs" => $user->blogs]);
});

Route::get('/category/{slag:jenis_slag}', function (Slag $slag) {
    return view('blog', ['title' => "Article category ". $slag->nama_slag, "blogs" => $slag->kategoryPosts]);
});

Route::get('/blog/{post:slag}', function (Post $post) {
    return view('article', ['title' => 'Single Blog', 'blog' => $post]);
});

Route::get('/projek', function () {
    return view('projek', ['title' => 'Project']);
});

Route::get('/reports', function () {
    return view('reports', ['title' => 'Reports']);
});