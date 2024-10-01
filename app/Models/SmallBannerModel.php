<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmallBannerModel extends Model
{
    use HasFactory;
    protected $fillable=[
        'small_banner',
        'small_banner_title',
    ];
}
