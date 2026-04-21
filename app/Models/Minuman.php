<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Minuman extends Model
{
    protected $table = 'minumans';

    protected $fillable = [
        'user',
        'jenis_minuman',
        'brand',
        'rating'
    ];
}