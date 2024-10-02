<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategoryModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_category',
        'sub_category',
        'sub_category_image',
    ];

    public function products()
    {
        return $this->hasMany(ProductModel::class, 'main_category_id');
    }

    /**
     * Scope to get subcategories based on the main category.
     */
    public function scopeSubCategories($query, $mainCategory)
    {
        return $query->where('main_category', $mainCategory)->get();
    }
}
