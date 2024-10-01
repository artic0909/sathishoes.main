<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BigBannerModel extends Model
{
    use HasFactory;
    protected $fillable=[
        'big_banner',
        'big_banner_title',
    ];
}
