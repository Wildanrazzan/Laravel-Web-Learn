<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return [
        ['id' => '1','slug' => 'judul-artikel-1','title' => 'Judul Artikel 1', 'author' => 'Muhamad Wildan Razzan', 'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, molestiae! Explicabo atque praesentium saepe, quod vitae quo id quasi cum recusandae sed eius, ducimus commodi cupiditate voluptatum. Nobis, quae soluta.'],
        ['id' => '2','slug' => 'judul-artikel-2','title' => 'Judul Artikel 2', 'author' => 'Muhamad Wildan Razzan', 'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, molestiae! Explicabo atque praesentium saepe, quod vitae quo id quasi cum recusandae sed eius, ducimus commodi cupiditate voluptatum. Nobis, quae soluta.'],
        ['id' => '3','slug' => 'judul-artikel-3','title' => 'Judul Artikel 3', 'author' => 'Muhamad Wildan Razzan', 'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, molestiae! Explicabo atque praesentium saepe, quod vitae quo id quasi cum recusandae sed eius, ducimus commodi cupiditate voluptatum. Nobis, quae soluta.'],
        ];
    }

    public static function find($slug){
        $post = Arr::first(static::all(), function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
        if(!$post){
            abort(404);
        }
        return $post;
    }
}

