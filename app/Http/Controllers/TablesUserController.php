<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;

class TablesUserController extends Controller
{
    public function index()
    {
        $users = \DB::table('users')->where('is_admin', 0)->orderBy('id', 'desc')->paginate(10);
        $admins = \DB::table('users')->where('is_admin', 1)->paginate(10);
        return view('admin.tables', [
            'users'=> $users,
            'admins'=>$admins,
        ]);
    }

//    public function update($id)
//    {
//        $changeUser = \DB::table('users')->find($id)->update(['is_admin' => 1]);
//    }
}
