<?php

use Illuminate\Support\Facades\File;
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
    $files = File::files(resource_path("posts"));
    $posts = [];

    foreach ($files as $file) {
        $document = \Spatie\YamlFrontMatter\YamlFrontMatter::parseFile($file);
    }

return view('posts', [
    'posts' => $posts
]);


    //    return view('posts', [
//        'posts' => \App\Models\Post::all()
//    ]);
});


Route::get('posts/{posts}', function ($slug) {
    return view('post', [
        'post' => \App\Models\Post::find($slug)
    ]);
})->where('post', '[A-z_/-]+');
