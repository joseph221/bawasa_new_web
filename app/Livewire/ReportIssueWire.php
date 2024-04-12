<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ReportIssue;

class ReportIssueWire extends Component
{
    public $first_name ="";
    public $last_name = "";
    public $phone_number = "";
    public $email = "";
    public $ward = "";
    public $street = "";
    public $type_of_issue = "";
    public $description_of_issue = "";

    public function save(){

        $reportIssue = new ReportIssue([
            'first_name'=> $this->first_name,
            'last_name' => $this->last_name,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'ward' => $this->ward,
            'street' => $this->street,
            'type_of_issue' => $this->type_of_issue,
            'description_of_issue' => $this->description_of_issue,
        ]);
        dd($reportIssue);


    }
    public function render()
    {
        return view('livewire.report-issue-wire');
    }
}
