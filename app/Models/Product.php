<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category_id',
        'thumb',
        'import_price',
        'price',
        'sale_price',
        'quantity',
        'special',
        'active',
    ];

    public function productDetail() {
        return $this->hasOne(ProductDetail::class);
    }

    public function category() {
        return $this->belongsToMany(Category::class);
    }
}
