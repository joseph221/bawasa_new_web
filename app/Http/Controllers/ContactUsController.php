<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Models\ContactUs;
use App\Notifications\ContactUsNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.contactUs.admin_contact_us');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($user());
        // $contactUs = new ContactUs([
        //     'names' => $request->names,
        //     'email' => $request->email,
        //     'organization'=> $request->organization,
        //     'phone'=> $request->phone,
        //     'message'=> $request->message,
        //     'subject'=> $request->subject
        // ]);
        // Mail::To('mrdavidjoseph60@gmail.com')->send(new ContactUsMail($contactUs));
        // $user()->notify(new ContactUsNotification());

        // return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }
}
