<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anouncement extends Model
{
    use HasFactory;
    protected $table = 'anouncements';
    protected $fillable = ['title','date','content'];

    public function scopeSearch($query,$term){
        $term = "%$term%";
        $query->where(function($query) use ($term){
            $query->where('title','like',$term)
            ->orWhere('date','like',$term)
            ->orWhere('content','like',$term);
        } );
    }
}
