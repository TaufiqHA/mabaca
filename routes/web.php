<?php

use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Homepage;
use App\Models\Organisasi;
use App\Models\Pustakawan;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\Route;

Route::get('/ilanding', function () {
    return view('index');
});

Route::get('/blog', function () {
    $blogs = Blog::all();
    $data = Homepage::first();
    return view('blog', ['blogs' => $blogs, 'data' => $data]);
});

Route::get('/blog-detail/{id}', function ($id) {
    $blog = Blog::where('id', $id)->first();
    $blogs = Blog::limit(5)->get();
    $data = Homepage::first();
    return view('blog-details', ['blog' => $blog, 'blogs' => $blogs, 'data' => $data]);
})->name('blog');

Route::get('/', function () {
    $data = Homepage::first();
    $blogs = Blog::limit(3)->orderBy('created_at', 'desc')->get();
    $galleries = Gallery::limit(6)->orderBy('created_at','desc')->get();
    $organisasi = Organisasi::all();
    $pustakawan = Pustakawan::all();
    return view('append', ['organisasi' => $organisasi, 'blogs' => $blogs, 'data' => $data, 'galleries' => $galleries, 'pustakawan' => $pustakawan]);
});

Route::get('/gallery', function () {
    $galleries = Gallery::all();
    $data = Homepage::first();
    return view('gallery', ['galleries' => $galleries, 'data' => $data]);
});