<?php

namespace App\Models\Products_Cities;

use App\Models\Cities\Cities;
use App\Models\Products\Products;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products_Cities extends Model
{
    use HasFactory;
    protected $table = "products_cities";
    protected $fillable = ['city_id', 'product_id'];

    public function city(){
        return $this->belongsTo(Cities::class);
    }

    public function product(){
        return $this->belongsTo(Products::class);
    }
}
