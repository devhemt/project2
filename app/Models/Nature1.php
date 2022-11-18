<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nature1 extends Model
{
    use HasFactory;

    protected $table = 'nature1';
    protected $primaryKey = 'id';
    protected $fillable = ['itemsid','size','color'];
}
