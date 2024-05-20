<?php

namespace App\Livewire\Admin;

use App\Exports\RequestServicesExport;
use App\Models\RequestService;
use illuminate\Pagination\Paginator;
use Livewire\Component;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;

class NewServiceRequestlive extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = 5;
    public $checked = [];
    public $search;
    public $selectPage = false;
    public $selectAll = false;


    public $first_name = "joseph";
    public $middle_name;
    public $last_name;
    public $mobile_number;
    public $mtaa;
    public $prot_number;
    public $house_no;
    public $nida;
    public $email;
    public $service_type;
    public $location;
    public $site_plan_available;
    public $location_status ;
    public $show_site_plan_available = false;

    public function render()
    {
        return view('livewire.admin.new-service-requestlive',
        ['request'=>$this->requestServices]);
    }

    public function clear(){
        $this->first_name = "";
        $this->middle_name = "";
        $this->last_name = "";
        $this->mobile_number = "";
        $this->mtaa ="";
        $this->prot_number ="";
        $this->house_no ="";
        $this->nida ="";
        $this->email = "";
        $this->service_type = "";
        $this->location = "";
        $this->site_plan_available = "";
        $this->location_status = "";
    }

    public function updated(){
        if ($this->location_status === "Not Measured") {
            $this->show_site_plan_available = true;
        }

        if ($this->location_status === "Measured") {
            $this->show_site_plan_available = false;
        }
    }

    public function getRequestServicesProperty(){
        return $this->requestServicesQuery->paginate($this->paginate);
    }

    public function getRequestServicesQueryProperty(){
        return RequestService::search(trim($this->search));
    }

    public function updatedSelectPage($value){
        if ($value) {
            $this->checked = $this->requestServices->pluck('id')->map(fn ($item)=> (string)$item)->toArray();
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
        return (new RequestServicesExport($this->checked))->download('RequestServices.xlsx');
    }

    public function deleterecodes(){
        RequestService::whereKey($this->checked)->delete();
        $this->checked = [];
        $this->selectPage = false;
        $this->selectAll = false;
        toast('selected records are deleted successfully','info');

    }

    public function deletesingle($id){
        RequestService::findOrFail($id)->delete();
        return back();
    }


    public function selectAl(){
        $this->selectAll = true;
        $this->checked = $this->requestServicesQuery->pluck('id')->map(fn ($item)=> (string)$item)->toArray();
    }
}
