<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Usuario extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;
    
    protected $table= 'usuarios';
    protected $fillable = [
        'nombre',
        'nombre_usuario',
        'correo',
        'contrasenia',
        'correo_verificar',
        'estado',
        'rol_id',
        'created_at',
        'updated_at'
    ];

    protected $hidden = ['contrasenia'];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    
    public function fanart(){
        return $this->hasMany(Fanart::class);
    }
    
    public static function VerifyUser($user){
        $userFound =  self::where('correo', $user['correo'])->first();
        if(!$userFound) return null;
        if(!Hash::check($user['contrasenia'],$userFound->contrasenia)) return null;
        
        return $userFound;

    }

    public function isAdmin(){
        return $this->role && $this->role->name === "admin";
    }
}
