<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as authenticable;


class penulis extends authenticable
{
    public $timestamps = false;
    protected $table = 'tb_penulis';
    protected $fillable = [
        'username',
        'password',
    ];
}
