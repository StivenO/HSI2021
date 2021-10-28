<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "user";
    protected $primaryKey ="iduser";
    protected $fillable = ['nomuser', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];

    //public function rol()
    //{
    //    return $this->belongsTo(Rol::class);
    //}
}
