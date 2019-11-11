<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User2 extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    //
    use AuthenticableTrait;
    protected $table = 'users';
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = \Hash::make($password);
    }
}
