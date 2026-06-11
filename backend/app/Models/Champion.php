<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Champion extends Model
{
    protected $fillable = [
        'name',
        'ja_name',
        'role',
    ];
}
