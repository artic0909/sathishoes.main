<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategoryModel extends Model
{
    use HasFactory;
    protected $fillable = ['main_category', 'slug'];
}
