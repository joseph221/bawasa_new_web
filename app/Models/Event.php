<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = "events";

    protected $fillable = ['title','image','date','desc'];

    public function scopeSearch($query,$term){
        $term = "%$term%";
        $query->where(function($query) use ($term){
            $query->where('title','like',$term)
            ->orWhere('date','like',$term)
            ->orWhere('desc','like',$term);
        } );
    }
}
