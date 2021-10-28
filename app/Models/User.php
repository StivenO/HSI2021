<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

     protected $table = "user";
     protected $primaryKey = "iduser";
     protected $fillable = ['typeid_id', 'numid',  'image', 'nomuser', 'apeuser', 'emailuser', 'nick', 'pass', 'date'];
    //protected $fillable = ['person_id'];

    public function typeid(){
            return $this->belongsTo(Typeid::class, 'typeid_id', 'idtypeid');
    }
}

