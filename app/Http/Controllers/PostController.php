<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function show($slug)
    {
        $post = Post::where("slug", $slug)->first();

        $post->load("category", "tags", "user:id,name");

        $post->cover_img = Storage::url($post->cover_img);

        return response()->json($post);
    }
}
