<?php

namespace App\Exports;

use App\Models\Anouncement;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class AnouncementsExport implements FromQuery
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Anouncement::all();
    // }

    use Exportable;
    protected $anouncements;

    public function __construct($anouncements){
        $this->anouncements = $anouncements;
    }

    public function query()
    {
        return Anouncement::query()->whereKey($this->anouncements);
    }
}
