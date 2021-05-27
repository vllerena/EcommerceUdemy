<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO = 2;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function sizes()
    {
        $this->hasMany(Size::class);
    }

    public function brand()
    {
        $this->belongsTo(Brand::class);
    }

    public function subcategory()
    {
        $this->belongsTo(Subcategory::class);
    }

    public function colors()
    {
        $this->belongsToMany(Color::class);
    }

    public function images()
    {
        $this->morphMany(Image::class, "imageable");
    }
}
