<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'buying_price',
        'quantity',
        'user_id',
    ];

    protected $attributes = [
        'price' => 0, // set default value for price column
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
