<?php

namespace App\Http\Controllers;
use App\Models\Post;
class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at','DESC')->get();
        $data = [
            'posts' => $posts,
        ];
        return view('posts.index');
    }

    public function show($id)
    {
        $posts = Post::find($id);
        $data = [
            'post' => $posts,
        ];
        return view('posts.show', $data);
    }
}
