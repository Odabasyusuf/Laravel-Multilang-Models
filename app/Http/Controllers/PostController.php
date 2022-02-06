<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StorePostRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        Post::create($request->validated());

        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    public function save($id, Request $request)
    {
        $post = Post::find($id);
        $post->update([
            'title_'.app()->getLocale() => $request['title_'.app()->getLocale()],
            'full_text_'.app()->getLocale() => $request['full_text_'.app()->getLocale()],
        ]);

        return back();
    }
}
