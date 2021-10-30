<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

     protected $table = "person";
     protected $primaryKey = "idperson";
     protected $fillable = ['typeid_id', 'numid',  'nomperson', 'apeperson', 
     'address', 'phone', 'ptype_id', 'emailperson'];
    //protected $fillable = ['person_id'];

    public function typeid(){
            return $this->belongsTo(Typeid::class, 'typeid_id', 'idtypeid');
    }
    public function ptype(){
            return $this->belongsTo(Ptype::class, 'ptype_id', 'idptype');
            
    }
}

