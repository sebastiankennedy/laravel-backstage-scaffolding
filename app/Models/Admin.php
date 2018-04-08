<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Authenticatable
{
    use SoftDeletes, Notifiable;

    public static $tableName = 'admins';

    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
