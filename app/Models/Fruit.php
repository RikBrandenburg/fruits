<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    /** @use HasFactory<\Database\Factories\FruitFactory> */
    use HasFactory;

    protected $table = 'fruits';

    protected $fillable = [
        'name',
        'colour',
        'weight',
        'family_id',
    ];

    public function family()
    {
        return $this->belongsTo(Family::class);
    }
}
