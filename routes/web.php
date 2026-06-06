<?php

use App\Models\Post;
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
    $articles = Post::latest()->filter(request(['search_key','kategori','pembuat']))->Paginate(6)->withQueryString();

    return view('blog', ['title' => 'Blog', 'blogs' => $articles]);
});


Route::get('/blog/{post:judul}', function (Post $post) {
    return view('article', ['title' => 'Single Blog', 'blog' => $post]);
});

Route::get('/projek', function () {
    return view('projek', ['title' => 'Project']);
});

Route::get('/reports', function () {
    return view('reports', ['title' => 'Reports']);
});