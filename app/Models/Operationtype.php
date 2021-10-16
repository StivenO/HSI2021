<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operationtype extends Model
{
    use HasFactory;

    protected $table ="operationtype";
    protected $primaryKey ="idopetype";
    protected $fillable =['nomopetype', 'state'];
    public function Sells(){
        return $this->hasMany(Sell::class, 'opetype_id','idopetype');
     }
}
