<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurado extends Model
{
    use HasFactory;

    protected $table = "perfiljurados";
    public $timestamps = false;
    
}
