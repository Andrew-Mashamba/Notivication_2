<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommoditiesModel extends Model
{
    use HasFactory;
    protected $table = 'commodities';
    protected $guarded = [];
}
