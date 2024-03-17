<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class admin_controller extends Controller
{
    use Notifiable;

    public function registered(){
        $users = User::all();
        return view('admin.registered_users')->with('users',$users);
    }
    public function Notifications(){
        $notification = Notification::paginate(5);
        $title = 'Delete row!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.notifications.all_notification')->with('notifications',$notification);
    }

    public function Notifications2(){
        $notification = Notification::paginate(5);
        $title = 'Delete row!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.notifications.request_servicenotification')->with('notifications',$notification);
    }

    public function markAsread($notifucationId){
        $user = Auth::user();
        $notification = $user->notifications()->find($notifucationId);

        if ($notification) {
            $notification->markAsread();
        }
        else {
            # code...
        }
    }

    public function deleteNotification($notidicationId){
        $user = Auth::user();
        $notification = $user->notifications()->find($notidicationId);
        if($notification){
            $notification->delete();
            return redirect()->back();
        }
        else{

        }

    }
}
