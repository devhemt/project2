<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nature extends Model
{
    use HasFactory;

    protected $table = 'nature';
    protected $primaryKey = 'id';
    protected $fillable = ['itemsid','size','color','amount'];
}
