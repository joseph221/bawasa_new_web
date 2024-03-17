<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestService extends Model
{
    use HasFactory;

    protected $table = "request_services";
    protected $fillable = [
        "first_name",
        "middle_name",
        "last_name",
        "mobile_number",
        "email",
        "service_type",
        "location",
        "site_plan_available",
        "location_status",
    ];
}
