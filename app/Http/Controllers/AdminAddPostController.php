<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAddPostController extends Controller
{
    public function create()
    {
        return view('admin.add-new-post');
    }

    public function store(Request $request)
    {
        $post_title = $request->input('post_title');
        $post_content = $request->input('post_content');
        $post_images = $request->file('post_images')->store('', 'public');
        $post_user = \Auth::user()->name;
        $tag = $request->input('tag');
        $date_time = $request->input('date_time');
//        $check_tag = $request->input('check_tag');

        $data = array('images'=>$post_images, 'title'=>$post_title, 'content'=>$post_content, 'user_posted'=>$post_user, 'tag'=>$tag, 'created_at'=>$date_time);

        \DB::table('posts')->insert($data);
        redirect('/posts');
        echo "<a href='/posts'>success</a>";

    }
}
