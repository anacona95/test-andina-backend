<?php

namespace App\Models\Products_Cities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products_Cities extends Model
{
    use HasFactory;
    protected $table = "products_cities";
    protected $fillable = ['city_id', 'product_id'];
}
