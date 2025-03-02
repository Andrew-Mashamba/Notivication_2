<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SourcesModel extends Model
{
    use HasFactory;
    protected $table = 'sources';
    protected $guarded = [];
}
