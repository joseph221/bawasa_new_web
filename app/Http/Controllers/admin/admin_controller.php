<?php

namespace App\Http\Controllers\admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class admin_controller extends Controller
{
    public function registered(){
        $users = User::all();
        return view('admin.registered_users')->with('users',$users);
    }
}
