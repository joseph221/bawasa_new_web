<?php

namespace App\Livewire\Admin;

use App\Models\Managment;
use Livewire\Component;
use Livewire\WithPagination;

class Adminstrationlive extends Component
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
        return view('livewire.admin.adminstrationlive',['managments'=>$this->managments]);
    }

    public function getManagmentsProperty(){
        return $this->managmentsQuery->paginate($this->paginate);
    }

    public function getManagmentsQueryProperty(){
        return Managment::search(trim($this->search));
    }

    public function updatedSelectPage($value){
        if ($value) {
            $this->checked = $this->managments->pluck('id')->map(fn ($item)=> (string)$item)->toArray();
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
    //     return (new ManagmentsExport($this->checked))->download('Managments.xlsx');
    // }

    public function deleterecodes(){
        Managment::whereKey($this->checked)->delete();
        $this->checked = [];
        $this->selectPage = false;
        $this->selectAll = false;
        toast('selected records are deleted successfully','info');

    }

    public function deletesingle($id){
        Managment::whereKey($id)->delete();
        toast('selected records are deleted successfully','info');
    }


    public function selectAl(){
        $this->selectAll = true;
        $this->checked = $this->managmentsQuery->pluck('id')->map(fn ($item)=> (string)$item)->toArray();
    }

}
