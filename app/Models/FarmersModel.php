<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmersModel extends Model
{
    use HasFactory;
    protected $table = 'farmers';
    protected $guarded = [];

}