<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_image', 
        'product_title', 
        'product_price', 
        'product_desc', 
        'product_colors', 
        'product_sku', 
        'product_link', 
        'version_category', 
        'main_category_id', 
        'sub_category_id'
    ];

    public function mainCategory()
    {
        return $this->belongsTo(MainCategory::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
