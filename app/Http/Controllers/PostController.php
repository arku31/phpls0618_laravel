<?php

namespace App\Http\Controllers;

use App\Classes\ImageHandler;
use App\Events\PostPostedEvent;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->get();
        $data['posts'] = $posts;
        event(new PostPostedEvent());
        $imageRotator = new ImageHandler();
        $imageRotator->rotate();
        return view('posts.index', $data);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
           'title' => 'required',
           'content' => 'required'
        ]);

        Post::storePost($request->title, $request->get('content'));
        return redirect()->route('userposts.index');
    }

    public function edit($post_id)
    {
        $data['post'] = Post::find($post_id);
        return view('posts.edit', $data);
    }

    public function update($post_id, Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);

        Post::find($post_id)->update($request->all());
        return redirect()->route('userposts.index');
    }

    public function delete($post_id)
    {
        Post::destroy($post_id);
        return redirect()->route('userposts.index');
    }
}
