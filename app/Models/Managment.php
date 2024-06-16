<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Managment extends Model
{
    use HasFactory;

    protected $table = 'managments';
    protected $fillable = [
        'img',
        'full_name',
        'position',
        'category',
        'Acdmc_proff_title'
    ];

    public function scopeSearch($query,$term){
        $term = "%$term%";
        $query->where(function($query) use ($term){
            $query->where('full_name','like',$term)
            ->orWhere('position','like',$term)
            ->orWhere('category','like',$term)
            ->orWhere('Acdmc_proff_title','like',$term);

        } );
    }
}
