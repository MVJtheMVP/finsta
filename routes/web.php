<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\User;


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
    return view('posts.index', [
        'posts' => Post::all(),
    ]);
});

Route::get('posts/{post}', function ($id) {
    return view('posts.show', [
        'post' => Post::findorFail($id),
    ]);
});

Route::get('users/{user}', function (User $user) {
    return view('users.show', [
        'user'=> $user,
        'posts'=> $user->posts,
    
    ]);

});

Route::get('/dashboard', function () {
    return view('posts.index', [
        'posts' => Post::all(),
    ]);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
