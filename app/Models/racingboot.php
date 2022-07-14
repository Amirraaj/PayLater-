<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class racingboot extends Model
{
    use HasFactory;
    protected $table = "racingboot";
    protected $fillable=['title','description','image','name','price'];
}
