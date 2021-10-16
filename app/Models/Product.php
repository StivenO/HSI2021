<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table ="product";
    protected $primaryKey ="idproduct";
    protected $fillable =['nomproduct', 'description', 'stockmin', 'pricein', 'quantity', 'priceout', 'unit_id', 'category_id', 'state'];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'idcategory');
    }
    public function unit(){
        return $this->belongsTo(Unit::class, 'unit_id', 'idunit');
    }
    public function sells(){
        return $this->hasMany(Sell::class, 'product_id','idproduct');
     }
}
