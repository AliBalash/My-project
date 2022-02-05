<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show()
    {
        $posts = Post::select('id','title','body')->orderBy('id', 'DESC')->get();

        return view('post',['posts' => $posts]);
    }

    public function getEdit(Post $post)
    {
        return view('edit', ['post' => $post]);
    }

    public function postEdit(Request $request)
    {
        $post = Post::find($request->id);
        $post->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        session()->flash('status','Update Post Successfully');
        return redirect()->route('post');

    }

    public function getCreate()
    {
        return view('create');
    }

    public function postCreate(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        session()->flash('status','Create Post Successfully');
        return redirect()->route('post');

    }
}
