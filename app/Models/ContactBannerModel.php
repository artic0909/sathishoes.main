<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactBannerModel extends Model
{
    use HasFactory;
    protected $fillable=[
        'contact_banner',
        'contact_banner_title',
    ];
}
