<?php

namespace App\Livewire\Admin;

use App\Exports\PermissionsExport;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Permission;

class Permissionslive extends Component
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
        return view('livewire.admin.permissionslive',['permissions'=>$this->permissions]);
    }

    public function getPermissionsProperty(){
        return $this->permissionsQuery->paginate($this->paginate);
    }

    public function getPermissionsQueryProperty(){
        return Permission::search(trim($this->search));
    }

    public function updatedSelectPage($value){
        if ($value) {
            $this->checked = $this->permissions->pluck('id')->map(fn ($item)=> (string)$item)->toArray();
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
        return (new PermissionsExport($this->checked))->download('permissions.xlsx');
    }

    public function deleterecodes(){
        Permission::whereKey($this->checked)->delete();
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
        $this->checked = $this->permissionsQuery->pluck('id')->map(fn ($item)=> (string)$item)->toArray();
    }
}
