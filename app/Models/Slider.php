<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'url',
        'image',
        'sort',
        'active',
    ];

    public function scopeActive($query) {
        return $query->where('active', 1);
    }

    public function scopeSort($query) {
        return $query->orderBy('sort');
    }
}
