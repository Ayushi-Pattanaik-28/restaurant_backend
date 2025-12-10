<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class menucard extends Model
{
    public $timestamps = true;

    protected $fillable = [
        "item_name",
        "item_details",
        "item_price",
        "item_image"
    ];
}
