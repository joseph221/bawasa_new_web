<?php

namespace App\Livewire\Admin;

use App\Exports\ContactsExport;
use App\Models\Contact_Us;
use Livewire\Component;
use Livewire\WithPagination;

class AdminContactUs extends Component
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
        return view('livewire.admin.admin-contact-us',['contacts'=>$this->contacts]);
    }

    public function getContactsProperty(){
        return $this->contactsQuery->paginate($this->paginate);
    }

    public function getContactsQueryProperty(){
        return Contact_Us::search(trim($this->search));
    }

    public function updatedSelectPage($value){
        if ($value) {
            $this->checked = $this->contacts->pluck('id')->map(fn ($item)=> (string)$item)->toArray();
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
        return (new ContactsExport($this->checked))->download('contacts.xlsx');
    }

    public function deleterecodes(){
        Contact_Us::whereKey($this->checked)->delete();
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
        $this->checked = $this->contactsQuery->pluck('id')->map(fn ($item)=> (string)$item)->toArray();
    }
}
