<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'store';
    protected $fillable = [
        'store_name','store_id', 'store_score', 
    ];
}
