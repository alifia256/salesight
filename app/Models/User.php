<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table      = 'user';
    protected $primaryKey = 'user_id';
    public $incrementing  = true;
    protected $keyType    = 'int';

    protected $fillable = [
        'level_id',
        'username',
        'nama',
        'password',
        'branch_id',
    ];

    protected $hidden = ['password'];

    public function store()
    {
        return $this->hasOne(Store::class, 'user_id', 'user_id');
    }
}