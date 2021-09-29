<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coupon extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'coupon';
    protected $fillable = [
        'couponname','couponcode', 'description', 
    ];
}
