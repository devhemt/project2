<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $guarded = 'customer';

    protected $table = 'customer';
    protected $primaryKey = 'cus_id';
    protected $fillable = ['name','email','phone','password','address'];

    protected $hidden = [
        'password',
    ];
}
