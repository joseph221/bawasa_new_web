<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Spatie\Permission\Models\Role;

class RolesExport implements FromQuery
{
    use Exportable;
    protected $roles;

    public function __construct($roles){
        $this->roles = $roles;
    }

    public function query()
    {
        return Role::query()->whereKey($this->roles);
    }
}
