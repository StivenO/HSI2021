<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table ="rol";
    protected $primaryKey ="idrol";
    protected $fillable =['nomrol', 'state'];
     
    public function users(){
        return $this->hasMany(User::class, 'rol_id', 'idrol');
    }
}
