<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;

class admin_controller extends Controller
{
    use Notifiable;

    public function registered(){
        $users = User::all();
        return view('admin.registered_users')->with('users',$users);
    }
}
