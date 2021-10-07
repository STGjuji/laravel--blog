<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $files = \Illuminate\Support\Facades\File::files(resource_path("/../resources/posts/"));


    array_map(function ($file) {
        return $file->getContents();
    }, $files);
});

Route::get('posts/{post}', function ($slug) {

    $post = App\Models\Post::find($slug);
    return view('post', [
        'post' => $post
    ]);


    })->where('post', '[A-z_/-]+');

