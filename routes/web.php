<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/teresia', function () {
    return view('teresia');
});

Route::get('/AlulaHotel', function () {
    return view('AlulaHotel', ['title' => 'Alula Hotel']);
});

Route::get('/Home', function () {
    return view('Home', ['title' => 'Booking Hotelmu Sekarang!']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Daftar Kamar', 'posts' => Post::all()]);
});

Route::get('/posts/{id}', function($id) {

    $post = Post::find($id);
    
    return view('post', ['title' => 'Deskripsi Kamar', 'post' => $post]);
});

Route::get('/Contact', function () {
    return view('Contact', ['title' => 'How to Contact Us']);
});

Route::get('/About', function () {
    return view('About', ['title' => 'About Alula Hotel']);
});

Route::get('/form', function () {
    return view('form');
});
