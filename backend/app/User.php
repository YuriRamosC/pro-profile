<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function curriculum(){
        return $this->hasOne(Curriculums::class, 'id_user');
    }

    public function login($credentials){
        if (!$token = JWTAuth::attempt($credentials)) {
          throw new \Exception('Credencias incorretas, verifique-as e tente novamente.', -404);
        }
        return $token;
      }
      public function getJWTIdentifier()
      {
        return $this->getKey();
      }
      public function getJWTCustomClaims()
      {
        return [];
      }
}
