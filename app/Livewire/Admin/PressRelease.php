<?php

namespace App\Livewire\Admin;
use Illuminate\Http\Request;
use App\Models\Press_Release;
use Livewire\Component;

class PressRelease extends Component
{

    public $file_name = "";
    public $description = "";

    public function upload(Request $req){
        // $req->validate([
        //     'file_name' => 'required|mimes:application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf|max:10000',
        //     'description' =>'required'
        // ]);

        $filename = rand(1000,1322).'_'.$req->file_name->getClientOriginalName();
        $req->file_name->move('uploads/pressrelease',$filename);
        $press_release = Press_Release::create([
            'file_name' => $filename,
            'description' => $req->description
        ]);

        if($press_release){
            toast('file uploaded successfully','success');
            return redirect()->back();
        }else {
            toast('fail to upload','error');
            return redirect()->back();
        }
    }

    public function showPdf(){
        $path = public_path('uploads/pressrelease/1037_en-1692699304-Tender Advertisement NEW.pdf');
        return response()->file($path);
    }

    public function render()
    {
        $press_release = Press_Release::all();
        return view('livewire.admin.press-release')->with('press_release',$press_release);
    }



}
