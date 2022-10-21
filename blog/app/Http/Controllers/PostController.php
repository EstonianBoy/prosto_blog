<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(6);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => array(
                'required',
                'alpha_num',
                'max:50'
            ),
            'body' =>array(
                'required',
                'max:5000'
            ),
            'author' =>array(
                'required',
                'alpha_num',
                'max:35'
            ),
        ]);
        $posts = new Post();
        $posts->title = $request->title;
        $posts->body = $request->body;
        $posts->author = $request->author;

        $posts->save();
        return redirect('/home')->with('success','Post created successfully!');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
