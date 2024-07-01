<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
    $posts= Post::latest();
    if(request('search')){
        $posts
            ->where('title','like','%'.request('search').'%')
            ->orWhere('body','like','%'.request('search').'%');
    }
    return view('posts', [
        'posts' =>$posts->get(),
        'categories' => Category::all(),
    ]);
})->name('home');

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post,
        'categories' => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts, // Fixed to plural
        'currentCategory' => $category,
        'categories' => Category::all(),
    ]);
})->name('category');

Route::get('/authors/{author:username}', function (User $author) { // Fixed route path
    return view('posts', [
        'posts' => $author->posts, // Fixed to plural
        'categories' => Category::all(),
    ]);
});

