<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\TableInfo\CategoryTableInfo;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        CategoryTableInfo::NAME,
        CategoryTableInfo::SLUG,
        CategoryTableInfo::IMAGE,
        CategoryTableInfo::ICON,
    ];

    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    public function brands(){
        return $this->belongsToMany(Brand::class);
    }

    public function products(){
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }


}
