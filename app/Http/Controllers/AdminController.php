<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $posts = \DB::table('posts')->get();
        $users = \DB::table('users')->get();
        $count_posts = count($posts);
        $count_users = count($users);
        return view('admin.index', [
            'count_posts' => $count_posts,
            'count_users' => $count_users,
        ]);
    }
}
