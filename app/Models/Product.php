<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        'special_offer',
        'special_product',
        'active',
        'stock',
        'sku',
        'specification',
        'image',
        'info_delivery',

    ];

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeWhereId($query, $id) {
        return $query->where('id', $id);
    }

    public function scopeCategoryId($query, $id)
    {
        return $query->where('category_id', $id);
    }

    public function scopeOrderDescId($query) {
        return $query->orderBy('id', 'desc');
    }

    public function scopeSpecialOffer($query) {
        return $query->where('special_offer', 1);
    }

    public function scopeSpecialProduct($query) {
        return $query->where('special_product', 1);
    }
    
    // public function productDetail() {
    //     return $this->hasOne(ProductDetail::class);
    // }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function wishlist() {
        return $this->hasMany(Wishlist::class);
    }
}
