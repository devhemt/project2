<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batchprice extends Model
{
    use HasFactory;

    protected $table = 'batch_price';
    protected $primaryKey = 'id';
    protected $fillable = ['prdid','batch','batch_amount','cost'];
}
