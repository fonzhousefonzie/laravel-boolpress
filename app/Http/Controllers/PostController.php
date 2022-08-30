<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return response()->json([
            'success' => true,
            'results' => $posts
        ]);
    }

    public function front()
    {
        return view('frontend');
    }
}
