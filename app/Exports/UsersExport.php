<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;

class UsersExport implements FromQuery
{

    use Exportable;
    protected $users;

    public function __construct($users){
        $this->users = $users;
    }

    public function query()
    {
        return User::query()->whereKey($this->users);
    }
}
