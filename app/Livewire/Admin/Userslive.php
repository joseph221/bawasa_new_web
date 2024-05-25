<?php

namespace App\Livewire\Admin;

use App\Exports\UsersExport;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Userslive extends Component
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
        return view('livewire.admin.userslive',['users'=>$this->users ]);
    }

    public function getUsersProperty(){
        return $this->usersQuery->paginate($this->paginate);
    }

    public function getUsersQueryProperty(){
        return User::search(trim($this->search));
    }

    public function updatedSelectPage($value){
        if ($value) {
            $this->checked = $this->users->pluck('id')->map(fn ($item)=> (string)$item)->toArray();
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
        return (new UsersExport($this->checked))->download('users.xlsx');
    }

    public function deleterecodes(){
        User::whereKey($this->checked)->delete();
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
        $this->checked = $this->usersQuery->pluck('id')->map(fn ($item)=> (string)$item)->toArray();
    }
}
