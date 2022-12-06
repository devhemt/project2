<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    protected $table = 'items';
    protected $primaryKey = 'prd_id';
    protected $fillable = ['demoimage','name','description','price','tag','brand','provided'];
}
