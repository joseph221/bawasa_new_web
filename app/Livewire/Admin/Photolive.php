<?php

namespace App\Livewire\Admin;

use App\Models\Photo;
use Livewire\Component;
use Livewire\WithPagination;

class Photolive extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = 5;
    public $checked = [];
    public $search;
    public $selectPage = false;
    public $selectAll = false;

    public function render()
    {
        return view('livewire.admin.photolive',['photos'=>$this->photos]);
    }

    public function getPhotosProperty(){
        return $this->photosQuery->paginate($this->paginate);
    }

    public function getPhotosQueryProperty(){
        return Photo::search(trim($this->search));
    }

    public function updatedSelectPage($value){
        if ($value) {
            $this->checked = $this->photos->pluck('id')->map(fn ($item)=> (string)$item)->toArray();
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
    //     return (new PhotosExport($this->checked))->download('Photos.xlsx');
    // }

    public function deleterecodes(){
        Photo::whereKey($this->checked)->delete();
        $this->checked = [];
        $this->selectPage = false;
        $this->selectAll = false;
        toast('selected records are deleted successfully','info');

    }

    public function deletesingle($id){
        Photo::whereKey($id)->delete();
        toast('selected records are deleted successfully','info');
    }


    public function selectAl(){
        $this->selectAll = true;
        $this->checked = $this->photosQuery->pluck('id')->map(fn ($item)=> (string)$item)->toArray();
    }
}

