<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ptype extends Model
{
    use HasFactory;

    protected $table ="ptype";
    protected $primaryKey ="idptype";
    protected $fillable =['nomptype', 'state'];
     
    public function persons(){
        return $this->hasMany(Person::class, 'ptype_id', 'idptype');
    }
}
