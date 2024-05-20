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
        "mtaa",
        "prot_number",
        "nida",
        "house_no",
        "mobile_number",
        "email",
        "service_type",
        "location",
        "site_plan_available",
        "location_status",
    ];

    public function scopeSearch($query,$term){
        $term = "%$term%";
        $query->where(function($query) use ($term){
            $query->where('first_name','like',$term)
            ->orWhere('middle_name','like',$term)
            ->orWhere('mtaa','like',$term)
            ->orWhere('prot_number','like',$term)
            ->orWhere('nida','like',$term)
            ->orWhere('house_no','like',$term)
            ->orWhere('mobile_number','like',$term)
            ->orWhere('email','like',$term)
            ->orWhere('service_type','like',$term)
            ->orWhere('location','like',$term)
            ->orWhere('site_plan_available','like',$term)
            ->orWhere('location_status','like',$term)
            ->orWhere('last_name','like',$term);
        } );
    }
}
