<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    protected $fillable = [
        'id_user', 'coin'
    ];
}
