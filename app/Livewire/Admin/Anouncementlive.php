<?php

namespace App\Livewire\Admin;

use App\Exports\AnouncementsExport;
use App\Models\Anouncement;
use illuminate\Pagination\Paginator;
use Livewire\Component;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;


class Anouncementlive extends Component
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
        return view('livewire.admin.anouncementlive',
        ['anouncement'=>$this->anouncements]);
    }

    public function getAnouncementsProperty(){
        return $this->anouncementsQuery->paginate($this->paginate);
    }

    public function getAnouncementsQueryProperty(){
        return Anouncement::search(trim($this->search));
    }

    public function updatedSelectPage($value){
        if ($value) {
            $this->checked = $this->anouncements->pluck('id')->map(fn ($item)=> (string)$item)->toArray();
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

    public function exportselected(){
        return (new AnouncementsExport($this->checked))->download('anouncements.xlsx');
    }

    public function deleterecodes(){
        Anouncement::whereKey($this->checked)->delete();
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
        $this->checked = $this->anouncementsQuery->pluck('id')->map(fn ($item)=> (string)$item)->toArray();
    }
}
