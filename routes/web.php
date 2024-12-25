<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

/*rutas url, que te mandan a los diferentes sitios */

Route::get('/', function () {
    return 'Home';
});

Route::get('blog', function () {
    return 'Listado de publicaciones';
});

Route::get('blog/{slug}', function ($slug) {
    return $slug;
});

Route::get('buscar', function (Request $request) {
    return $request->all();
});
