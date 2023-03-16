<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PostExtAttribute;

class PostsController extends Controller
{
    public function index()
    {
        /* $posts = Post::with('post_ext_attributes')->latest()->limit(1)->get(); */
        $posts = Post::latest()->limit(100)->get();
        return view('index', ['posts' => $posts]);
    }
}
