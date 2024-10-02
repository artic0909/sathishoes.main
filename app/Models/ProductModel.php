<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'product_image',
        'version_category',
        'product_title',
        'product_price',
        'product_desc',
        'product_colors',
        'product_sku',
        'product_link',
    ];



    public function mainCategory()
    {
        return $this->belongsTo(MainCategoryModel::class, 'category_id');
    }

    /**
     * A product belongs to a subcategory.
     */
    public function subCategory()
    {
        return $this->belongsTo(MainCategoryModel::class, 'sub_category');
    }
}
