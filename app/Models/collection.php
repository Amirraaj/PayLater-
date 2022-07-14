<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class collection extends Model
{
    use HasFactory;

    protected $table = "collection";


    protected $fillable=['title1','description','image1','name1','price1','image2','name2','price2'];
}
