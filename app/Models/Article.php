<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'thumb', 'tag', 'author', 'description', 'content', 'active'
    ];

    public function scopeActive($query) {
        return $query->where('active', 1);
    }
    public function scopeSort($query) {
        return $query->orderBy('id');
    }
}
