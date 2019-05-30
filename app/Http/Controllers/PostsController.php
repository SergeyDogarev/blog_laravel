<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = \DB::table('posts')->orderBy('id', 'DESC')->paginate(3);
        $count = count($posts);
        return view('blog.posts', [
            'posts' => $posts,
            'count' => $count,
        ]);
    }
    public function show($id)
    {
        $post = \DB::table('posts')->find($id);
        return view('blog.show', compact('post'));
    }
}
