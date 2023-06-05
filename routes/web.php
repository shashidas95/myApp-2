<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('posts',[
        'posts'=> Post::all()
    ]);
});
Route::get('/posts/{post}', function($slug){
    return view('post', [
        'post'=> Post::findOrFail($slug)
    ]);
});

// Route::get('/posts/{post}', function ($slug) {
//     $path =__DIR__."/../resources/posts/{$slug}.html";

//     if (!file_exists($path)) {
//         return redirect('/');
//     }
//   $post= cache()->remember('posts.{$slug}', 1200, fn() => file_get_contents($path));
//     return view('post', ['post'=> $post]);
// })->where('post', '[A-z_\-]+');

// Route::get('/demo/{name}/{age}', [DemoController::class, 'DemoAction']);
// Route::Post('/demo/{email}', [DemoController::class, 'DemoAction']);
Route::Post('/file', [DemoController::class, 'DemoAction']);
Route::Post('/fileupload', [DemoController::class, 'FileUpload']);
Route::Post('/filestore', [DemoController::class, 'FileStore']);

