<?php

namespace App\Livewire\Admin;

use App\Exports\RolesExport;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class Roleslive extends Component
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
        return view('livewire.admin.roleslive',['roles'=>$this->roles]);
    }

    public function getRolesProperty(){
        return $this->rolesQuery->paginate($this->paginate);
    }

    public function getRolesQueryProperty(){
        return Role::search(trim($this->search));
    }

    public function updatedSelectPage($value){
        if ($value) {
            $this->checked = $this->roles->pluck('id')->map(fn ($item)=> (string)$item)->toArray();
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
        return (new RolesExport($this->checked))->download('roles.xlsx');
    }

    public function deleterecodes(){
        Role::whereKey($this->checked)->delete();
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
        $this->checked = $this->rolesQuery->pluck('id')->map(fn ($item)=> (string)$item)->toArray();
    }
}
