<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use SoftDeletes, Notifiable;
    const TABLE = 'admins';
    protected $table = self::TABLE;
    protected $guarded = [];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
