<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typeid extends Model
{
    use HasFactory;

    protected $table ="typeid";
    protected $primaryKey ="idtypeid";
    protected $fillable =['nomtypeid', 'state'];
     
    public function users(){
        return $this->hasMany(User::class, 'typeid_id', 'idtypeid');
    }
}
