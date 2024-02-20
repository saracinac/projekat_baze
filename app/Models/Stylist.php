<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stylist extends Model
{
    public $timestamps = false;

    use HasFactory;

    /**
     * 
     * @var string[]
     */

     protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
        'speciality',
     ];
}
