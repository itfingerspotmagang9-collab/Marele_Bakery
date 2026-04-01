<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'sku',
        'price',
        'stock',
        'image',
        'description',
        'is_active'
    ];

    public function category() {
        return $this->belongsTo(categories::class, 'category_id');
    }
}
