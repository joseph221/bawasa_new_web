<?php

namespace App\Livewire;

use App\Http\Controllers\admin\admin_controller;
use App\Mail\ContactUsMail;
use App\Models\Contact_Us;
use App\Models\User;
use App\Notifications\ContactUsNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;


class ContactUs extends Component
{
    public $names = "";
    public $email = "";
    public $organization = "";
    public $phone = "";
    public $message = "";
    public $subject = "";

    public function clear(){
        $this->names = "";
        $this->email ="";
        $this->organization ="";
        $this->phone ="";
        $this->message = "";
        $this->subject = "";
    }

    public function render()
    {
        return view('livewire.contact-us');
    }

    public function store(Request $request)
    {
        $contactUs = new Contact_Us([
            'names' => $this->names,
            'email' => $this->email,
            'organization'=> $this->organization,
            'phone'=> $this->phone,
            'message'=> $this->message,
            'subject'=> $this->subject
        ]);
        if($contactUs){
           $mail = Mail::To('mrdavidjoseph60@gmail.com')->send(new ContactUsMail($contactUs));
            // $contact_Us = new Contact_Us();
             $user = User::All();
            // auth()->user()->notify(new ContactUsNotification($contactUs));
           Notification::send($user, new ContactUsNotification($contactUs));
            if($mail){
                $contact_us = Contact_Us::create([
                    'names' => $this->names,
                    'email' => $this->email,
                    'organization'=> $this->organization,
                    'phone'=> $this->phone,
                    'message'=> $this->message,
                    'subject'=> $this->subject
                ]);
            }
            $this->clear();
            return back();
        }
        $this->clear();
        return back();

    }

}
