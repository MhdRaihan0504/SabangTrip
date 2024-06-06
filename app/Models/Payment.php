<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payment';
    
    protected $fillable = [
        'user_id',
        'etiket_id',
        'image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function etiket()
    {
        return $this->belongsTo(Etiket::class);
    }
}
