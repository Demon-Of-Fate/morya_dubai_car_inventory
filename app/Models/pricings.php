<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pricings extends Model
{
    use HasFactory;
    protected $table = 'pricings'; 
    public $timestamps = false;
}
