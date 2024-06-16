<?php

namespace App\Livewire\Admin;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class Eventlive extends Component
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
        return view('livewire.admin.eventlive',['events'=>$this->events]);
    }

    public function getEventsProperty(){
        return $this->eventsQuery->paginate($this->paginate);
    }

    public function getEventsQueryProperty(){
        return Event::search(trim($this->search));
    }

    public function updatedSelectPage($value){
        if ($value) {
            $this->checked = $this->events->pluck('id')->map(fn ($item)=> (string)$item)->toArray();
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
    //     return (new EventsExport($this->checked))->download('events.xlsx');
    // }

    public function deleterecodes(){
        Event::whereKey($this->checked)->delete();
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
        $this->checked = $this->eventsQuery->pluck('id')->map(fn ($item)=> (string)$item)->toArray();
    }


}
