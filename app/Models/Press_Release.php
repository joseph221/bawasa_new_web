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

    public function scopeSearch($query,$term){
        $term = "%$term%";
        $query->where(function($query) use ($term){
            $query->where('description','like',$term)
            ->orWhere('file_name','like',$term);

        } );
    }
}
