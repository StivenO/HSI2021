<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table ="category";
    protected $primaryKey ="idcategory";
    protected $fillable =['nomcategory', 'state'];

    public function products(){
       return $this->hasMany(Product::class, 'category_id','idcategory');
    }
    // No la vamos a utilizar de momento.
    //  para muestrar (en views)
    //<td>@foreach ($row->products as $product){{$product->nomproduct}}@endforeach</td>
}
