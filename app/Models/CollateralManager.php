<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollateralManager extends Model
{
    use HasFactory;
    protected $table = 'collateral_managers';
    protected $guarded = [];
}
