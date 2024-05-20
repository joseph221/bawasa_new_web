<?php

namespace App\Exports;

use App\Models\RequestService;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class RequestServicesExport implements FromQuery
{
    use Exportable;
    protected $requestservices;

    public function __construct($requestservices){
        $this->requestservices = $requestservices;
    }

    public function query()
    {
        return RequestService::query()->whereKey($this->requestservices);
    }
}
