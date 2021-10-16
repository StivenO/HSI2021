<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    use HasFactory;

     protected $table = "sell";
     protected $primaryKey = "idsell";
     protected $fillable = ['person_id', 'user_id',  'opetype_id', 'product_id', 'cantproduct', 'cash', 'disc', 'date', 
     'total'];
    
     public function operationtype(){
        return $this->belongsTo(operationtype::class, 'opetype_id', 'idopetype');
    }
    public function product(){
        return $this->belongsTo(Product::class, 'product_id','idproduct');
     }
}
