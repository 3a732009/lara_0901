<?php

namespace App\Http\Controllers;
use App\Models\Post;
use http\Env\Request;

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

    public function store(Request $request)
    {
        Post::creat($request->all());
        return redirect()->route('admin.posts.index');
    }
    public function update(Request $request,$id)
    {
        $posts = Post::find($id);
        $posts->update($request->all());
        return redirect()->route('admin.posts.index');
    }
}
