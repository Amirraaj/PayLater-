<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oderdetail extends Model
{
    use HasFactory;
    protected $table = "oderdetail";

    protected $fillable=['Shoeid','ShoesName','Price','Size','Number','Address','Email'];
}
