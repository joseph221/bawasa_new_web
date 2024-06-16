<?php

namespace App\Exports;

use App\Models\Contact_Us;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;

class ContactsExport implements FromQuery
{
    use Exportable;
    protected $contacts;

    public function __construct($contacts){
        $this->contacts = $contacts;
    }

    public function query()
    {
        return Contact_Us::query()->whereKey($this->contacts);
    }
}
