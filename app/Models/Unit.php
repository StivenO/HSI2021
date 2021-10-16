<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $table ="unit";
    protected $primaryKey ="idunit";
    protected $fillable =['nomunit', 'state'];

    public function products(){
       return $this->hasMany(Product::class, 'unit_id','idunit');
    }
    // No la vamos a utilizar de momento.
    //  para muestrar (en views)
    //<td>@foreach ($row->products as $product){{$product->nomproduct}}@endforeach</td>
}
