<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as authenticable;


class akun extends authenticable
{
    public $timestamps = false;
    protected $table = 'akun';
    protected $fillable = [
        'nama',
        'username',
        'admin',
        'password',

    ];
}
