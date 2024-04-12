<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;

class Event_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event = Event::paginate(7);
        $title = 'Delete row!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        // return $event;
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
            'title' =>'required',
            'imge' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' =>'required',
            'desc' =>'required'
        ]);

        $imageName = rand(1000,1322).'_'.$request->imge->getClientOriginalName();
        $request->imge->move('uploads',$imageName);
        $event = Event::create([
            'title' =>$request->title,
            'image' => $imageName,
            'date' => $request->date,
            'desc' => $request->desc
        ]);

        if($event){
            toast('event added successfully','success');
            return redirect()->back();
        }else {
            toast('fail to add event','error');
            return redirect()->back();
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
        $eventy = Event::findOrFail($id);

        $destination = 'uploads/'.$eventy->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $imageName = rand(1000,1322).'_'.$request->imge->getClientOriginalName();
            $request->imge->move('uploads',$imageName);
            $eventy->update([
                'image' => $imageName,
                'date' => $request->date,
                'desc' => $request->desc
            ]);

            if($eventy){
                toast('event updated successfully','success');
                return redirect()->back();
            }else {
                toast('fail to edit event','error');
                return redirect()->back();
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return back();
    }
}
