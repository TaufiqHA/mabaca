<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'hero_image' => 'array',
        'about_img_1' => 'array',
        'about_img_2' => 'array',
        'about_img_3' => 'array',
        'about_img_4' => 'array',
    ];
}
