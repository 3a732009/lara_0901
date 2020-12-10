<?php

namespace App\Http\Controllers;
use App\Models\Post;
class AdminPostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();
        $data = ['posts' => $posts];
        return view('admin.posts.index', $data);
    }

    public function create()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();
        $data = ['posts' => $posts];
        return view('admin.posts.create', $data);
    }

    public function edit($id)
    {
        $data = ['id' => $id];

        return view('admin.posts.edit', $data);
    }
}
