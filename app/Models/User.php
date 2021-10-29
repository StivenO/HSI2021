<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = "user";
    protected $primaryKey = "iduser";
    protected $fillable = ['typeid_id', 'numid',  'image', 'nomuser', 'apeuser', 'email', 'nick', 'password', 'date'];
    protected $hidden = ['password', 'remember_token'];


    public function typeid()
    {
        return $this->belongsTo(Typeid::class, 'typeid_id', 'idtypeid');
    }
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id', 'idrol');
    }
}

