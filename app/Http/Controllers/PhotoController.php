<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.photo.photos');
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
        $validation = $request->validate([

            'imge' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' =>'required',
            'desc' =>'required'
        ]);

        if ($validation) {
            $imageName = rand(1000,1322).'_'.$request->imge->getClientOriginalName();
            $request->imge->move('uploads/photo',$imageName);
            $photo = Photo::create([
                'image' => $imageName,
                'date' => $request->date,
                'desc' => $request->desc
            ]);

            if($photo){
                toast('photo added successfully','success');
                return redirect()->back();
            }else {
                toast('fail to add photo','error');
                return redirect()->back();
            }
        }else {
            toast('All field must have values','error');
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'imge' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' =>'required',
            'desc' =>'required'
        ]);

        $photoy = Photo::findOrFail($id);

        $destination = 'uploads/photo/'.$photoy->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $imageName = rand(1000,1322).'_'.$request->imge->getClientOriginalName();
            $request->imge->move('uploads/photo/',$imageName);
            $photoy->update([
                'image' => $imageName,
                'date' => $request->date,
                'desc' => $request->desc
            ]);

            if($photoy){
                toast('photo updated successfully','success');
                return redirect()->back();
            }else {
                toast('fail to edit photo','error');
                return redirect()->back();
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
