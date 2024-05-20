<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Anouncement;
use RealRashid\SweetAlert\Facades\Alert;

class Anouncement_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = Anouncement::paginate(7);
        $title = 'Delete row!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.anouncement.anouncements');
        //return response()->json(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'title' => 'required|max:255',
            'date' => 'required',
            'content' =>'required'
        ]);
        $anouncement = Anouncement::create([
            'title' => $request->title,
            'date' => $request->date,
            'content' => $request->content
        ]);
        if ($anouncement) {
            toast('Your Post as been submited!','success');
            return redirect()->route('anouncement');
        }else {
            Alert::toast('fail to add anouncement', 'error');
            return redirect()->route('anouncement');


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
        $anouncement = Anouncement::find($id)->get()->first();
        return $anouncement;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $anouncement = Anouncement::findOrFail($id);
        $anouncement->update($request->all());
        return redirect()->route('anouncement');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $anouncement = Anouncement::findOrFail($id);
        $anouncement->delete();
        return back();
    }
}
