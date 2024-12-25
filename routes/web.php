<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

/*rutas url, que te mandan a los diferentes sitios */

Route::get('blog', function () {
    $posts = [
        ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' => 2, 'title' => 'laravel', 'slug' => 'laravel']
    ];

    return view('blog', ['posts' => $posts]);
});

Route::get('blog/{slug}', function ($slug) {
    //consulta a la BD
    $post = $slug;
    return view('post', ['post' => $post]);
});
