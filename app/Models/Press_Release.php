<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Press_Release extends Model
{
    use HasFactory;
    protected $table = "press__releases";
    protected $fillable = [
        'description',
        'file_name',
    ];
}
