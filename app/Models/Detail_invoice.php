<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_invoice extends Model
{
    use HasFactory;

    protected $table = 'detail_invoice';
    protected $primaryKey = 'dtliv_id';
    protected $fillable = ['itemsid','invoice_id','size','color','amount','price_one','cost_one'];
}
