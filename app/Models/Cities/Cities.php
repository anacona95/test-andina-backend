<?php

namespace App\Models\Cities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;
    protected $table = "cities";
    protected $fillable = [ 'name','latitude','longitude' ];
}
