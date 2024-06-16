<?php

namespace App\Livewire\Admin;

use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Press_Release;

class Presslive extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = 5;
    public $checked = [];
    public $search;
    public $selectPage = false;
    public $selectAll = false;

    public $file_name = "";
    public $description = "";

    public function render()
    {
        return view('livewire.admin.presslive')->with('press',$this->pressReleases);
    }

    public function upload(Request $req){
        $req->validate([
            'file_name' => 'required|mimes:application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf|max:10000',
            'description' =>'required'
        ]);

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


    public function getPressReleasesProperty(){
        return $this->pressReleasesQuery->paginate($this->paginate);
    }

    public function getPressReleasesQueryProperty(){
        return Press_Release::search(trim($this->search));
    }

    public function updatedSelectPage($value){
        if ($value) {
            $this->checked = $this->pressReleases->pluck('id')->map(fn ($item)=> (string)$item)->toArray();
        } else {
            $this->checked = [];
        }

    }

    public function isChecked($id){
        return in_array($id,$this->checked);
    }

    public function updatedChecked(){
        $this->selectPage = false;

    }

    // public function exportselected(){
    //     return (new Press_ReleasesExport($this->checked))->download('Press_Releases.xlsx');
    // }

    public function deleterecodes(){
        Press_Release::whereKey($this->checked)->delete();
        $this->checked = [];
        $this->selectPage = false;
        $this->selectAll = false;
        toast('selected records are deleted successfully','info');

    }

    public function deletesingle($id){
        dd($id);
    }


    public function selectAl(){
        $this->selectAll = true;
        $this->checked = $this->pressReleasesQuery->pluck('id')->map(fn ($item)=> (string)$item)->toArray();
    }

}
