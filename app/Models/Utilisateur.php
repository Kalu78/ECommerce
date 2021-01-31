<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Utilisateur extends Model implements Authenticatable
{
    use HasFactory;

    use BasicAuthenticatable;

    protected $fillable = ['id', 'email', 'username', 'password'];

    public function getRememberTokenName()
    {
        return '';
    }

}
