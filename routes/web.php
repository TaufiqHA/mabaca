<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use Ramsey\Uuid\Type\Integer;

Route::get('/', function () {
    return view('index');
});

Route::get('/blog', function () {
    $blogs = Blog::all();
    return view('blog', ['blogs' => $blogs]);
});

Route::get('/blog-detail/{id}', function ($id) {
    $blog = Blog::where('id', $id)->first();
    $blogs = Blog::limit(5)->get();
    return view('blog-details', ['blog' => $blog, 'blogs' => $blogs]);
})->name('blog');