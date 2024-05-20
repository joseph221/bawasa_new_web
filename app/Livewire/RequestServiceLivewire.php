<?php

namespace App\Livewire;

use App\Models\RequestService;
use App\Notifications\ServiceRequestNotification;
use Illuminate\Support\Facades\Notification;
use App\Models\User;
use Livewire\Component;

class RequestServiceLivewire extends Component
{
    public $first_name="";
    public $middle_name="";
    public $last_name="";
    public $mobile_number="";
    public $mtaa;
    public $prot_number="";
    public $house_no="";
    public $nida="";
    public $email="";
    public $service_type="";
    public $location="";
    // public $location_status;
    public $site_plan_available="";
    public $location_status = "";
    public $show_site_plan_available = false;

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

    public function save(){
        $requestService = new RequestService([
            "first_name" => $this->first_name,
            "middle_name" => $this->middle_name,
            "last_name" => $this->last_name,
            "mobile_number" => $this->mobile_number,
            "mtaa"=>$this->mtaa ,
            "prot_number"=>$this->prot_number ,
            "house_no"=>$this->house_no ,
            "nida"=>$this->nida ,
            "email" => $this->email,
            "service_type" => $this->service_type,
            "location" => $this->location,
            "site_plan_available" => $this->site_plan_available,
            "location_status" => $this->location_status,
        ]);

        if ($requestService) {
            $request_service = RequestService::create([
                "first_name" => $this->first_name,
                "middle_name" => $this->middle_name,
                "last_name" => $this->last_name,
                "mobile_number" => $this->mobile_number,
                "mtaa"=>$this->mtaa ,
                "prot_number"=>$this->prot_number ,
                "house_no"=>$this->house_no ,
                "nida"=>$this->nida ,
                "email" => $this->email,
                "service_type" => $this->service_type,
                "location" => $this->location,
                "site_plan_available" => $this->site_plan_available,
                "location_status" => $this->location_status,
            ]);
            $this->resetExcept('show_site_plan_available');
            if ($request_service) {
                $user = User::All();
                Notification::send($user, new ServiceRequestNotification($requestService));
            }

            $this->clear();

            return redirect(request()->header('Referer'));
        }
    }

    public function updated(){
        if ($this->location_status === "Not Measured") {
            $this->show_site_plan_available = true;
        }

        if ($this->location_status === "Measured") {
            $this->show_site_plan_available = false;
        }
    }
    public function store(){

    }
    public function render()
    {
        return view('livewire.request-service-livewire');
    }
}
