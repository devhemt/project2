<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Totalproperty extends Model
{
    use HasFactory;

    protected $table = 'total_property';
    protected $primaryKey = 'id';
    protected $fillable = ['itemsid','sizes','colors'];
}
