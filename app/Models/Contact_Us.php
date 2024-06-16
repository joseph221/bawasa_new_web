<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contact_Us extends Model
{
    use Notifiable;
    use HasFactory;
    protected $table = 'contact_us';
    protected $fillable = [
        'names',
        'email',
        'organization',
        'phone',
        'message',
        'subject'
    ];

    public function scopeSearch($query,$term){
        $term = "%$term%";
        $query->where(function($query) use ($term){
            $query->where('names','like',$term)
            ->orWhere('email','like',$term)
            ->orWhere('organization','like',$term)
            ->orWhere('message','like',$term)
            ->orWhere('phone','like',$term)
            ->orWhere('subject','like',$term);
        } );
    }
}
