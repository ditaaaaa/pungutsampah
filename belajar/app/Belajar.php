<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Belajar extends Model
{
    protected $fillable = [
        'nama', 'nim', 'kelas',
    ];
}
