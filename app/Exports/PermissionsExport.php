<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Spatie\Permission\Models\Permission;

class PermissionsExport implements FromQuery
{
    use Exportable;
    protected $permissions;

    public function __construct($permissions){
        $this->permissions = $permissions;
    }

    public function query()
    {
        return Permission::query()->whereKey($this->permissions);
    }
}
