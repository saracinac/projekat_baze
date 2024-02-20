<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    public $timestamps = false;

    use HasFactory;

    /**
     * 
     * @var string[]
     */

     protected $fillable = [
        'reservation',
        'product',
        'review',
     ];
}
