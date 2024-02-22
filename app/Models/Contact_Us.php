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
}
