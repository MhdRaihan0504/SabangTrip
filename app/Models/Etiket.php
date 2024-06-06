<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiket extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination',
        'date',
        'time',
        'occupant',
        'email'
    ];
}
