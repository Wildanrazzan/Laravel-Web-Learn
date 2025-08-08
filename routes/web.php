<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home' ,['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Willy', 'title'=> 'About']);
});

Route::get('/blog', function () {
    return view('blog' ,['title'=> 'Blog']);
});

Route::get('/contact', function () {
    return view('contact',['email' => 'wildanrazzan82@gmail.com','telp' => '083830837156', 'title'=> 'Contact']);
});