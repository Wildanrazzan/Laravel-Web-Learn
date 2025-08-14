<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home' ,['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/blog', function () {
    return view('blog' ,['title' => 'Blog', 'posts' => [
        ['id' => '1','slug' => 'judul-artikel-1','title' => 'Judul Artikel 1', 'author' => 'Muhamad Wildan Razzan', 'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, molestiae! Explicabo atque praesentium saepe, quod vitae quo id quasi cum recusandae sed eius, ducimus commodi cupiditate voluptatum. Nobis, quae soluta.'],
        ['id' => '2','slug' => 'judul-artikel-2','title' => 'Judul Artikel 2', 'author' => 'Muhamad Wildan Razzan', 'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, molestiae! Explicabo atque praesentium saepe, quod vitae quo id quasi cum recusandae sed eius, ducimus commodi cupiditate voluptatum. Nobis, quae soluta.'],
        ['id' => '3','slug' => 'judul-artikel-3','title' => 'Judul Artikel 3', 'author' => 'Muhamad Wildan Razzan', 'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, molestiae! Explicabo atque praesentium saepe, quod vitae quo id quasi cum recusandae sed eius, ducimus commodi cupiditate voluptatum. Nobis, quae soluta.'],
    ]]);
});

Route::get('/blog/{slug}', function ($slug) {
    $posts = [
        ['id' => '1','slug' => 'judul-artikel-1','title' => 'Judul Artikel 1', 'author' => 'Muhamad Wildan Razzan', 'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, molestiae! Explicabo atque praesentium saepe, quod vitae quo id quasi cum recusandae sed eius, ducimus commodi cupiditate voluptatum. Nobis, quae soluta.'],
        ['id' => '2','slug' => 'judul-artikel-2','title' => 'Judul Artikel 2', 'author' => 'Muhamad Wildan Razzan', 'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, molestiae! Explicabo atque praesentium saepe, quod vitae quo id quasi cum recusandae sed eius, ducimus commodi cupiditate voluptatum. Nobis, quae soluta.'],
        ['id' => '3','slug' => 'judul-artikel-3','title' => 'Judul Artikel 3', 'author' => 'Muhamad Wildan Razzan', 'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, molestiae! Explicabo atque praesentium saepe, quod vitae quo id quasi cum recusandae sed eius, ducimus commodi cupiditate voluptatum. Nobis, quae soluta.'],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact']);
});