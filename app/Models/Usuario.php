<?php


namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Usuario extends Model implements Authenticatable
{
    use AuthenticableTrait;

    protected $table = 'usuarios';
    protected $fillable = [
        'nome',
        'cpf',
        'login',
        'password',
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }
}
