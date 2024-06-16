<?php

namespace App\Livewire\Admin;

use App\Models\Board;
use Livewire\Component;
use Livewire\WithPagination;

class Boardlive extends Component
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
        return view('livewire.admin.boardlive',['boards'=>$this->boards]);
    }

    public function getBoardsProperty(){
        return $this->boardsQuery->paginate($this->paginate);
    }

    public function getBoardsQueryProperty(){
        return Board::search(trim($this->search));
    }

    public function updatedSelectPage($value){
        if ($value) {
            $this->checked = $this->boards->pluck('id')->map(fn ($item)=> (string)$item)->toArray();
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
    //     return (new BoardsExport($this->checked))->download('boards.xlsx');
    // }

    public function deleterecodes(){
        Board::whereKey($this->checked)->delete();
        $this->checked = [];
        $this->selectPage = false;
        $this->selectAll = false;
        toast('selected records are deleted successfully','info');

    }

    public function deletesingle($id){
        Board::whereKey($id)->delete();
        toast('selected records are deleted successfully','info');
    }


    public function selectAl(){
        $this->selectAll = true;
        $this->checked = $this->boardsQuery->pluck('id')->map(fn ($item)=> (string)$item)->toArray();
    }
}
