<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){

        return view('posts.index', [
            'posts' =>Post::latest()->filter(request(['search','category','author']))->get(),
            // 'categories' => Category::all(),

        ]);
    }
    public function show(Post $post){
        return view('posts.show', [
            'post' => $post,
            'categories' => Category::all(),
        ]);
    }
}