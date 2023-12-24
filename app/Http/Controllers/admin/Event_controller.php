<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use RealRashid\SweetAlert\Facades\Alert;

class Event_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event = Event::all();
        return view('admin.events.events')->with('events',$event);
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
        $request->validate([
            'imge' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' =>'required',
            'desc' =>'required'
        ]);

        $imageName = rand(1000,1322).'.'.$request->imge->getClientOriginalName();
        $request->image->move('uploads',$imageName);
        $event = Event::create([
            'imge' => $imageName,
            'date' => $request->date,
            'desc' => $request->desc
        ]);

        if($event){
            toast('event added successfully','success');
            return redirect()->route('events');
        }else {
            toast('fail to add event','success');
            return redirect()->route('events');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
