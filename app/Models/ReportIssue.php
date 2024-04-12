<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportIssue extends Model
{
    use HasFactory;

    protected $table = "report_issues";

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'ward',
        'street',
        'type_of_issue',
        'description_of_issue',
    ];
}
