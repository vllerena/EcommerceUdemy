<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function products()
    {
        $this->hasMany(Product::class);
    }

    public function category()
    {
        $this->belongsTo(Category::class);
    }
}
