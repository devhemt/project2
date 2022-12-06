<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provideds extends Model
{
    use HasFactory;

    protected $table = 'provideds';
    protected $primaryKey = 'id';
    protected $fillable = ['provided_name','provided_phone','provided_address'];
}
