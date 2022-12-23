<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cus extends Model
{
    use HasFactory;
   protected $table="cus";
   protected $fillable=['productname','price','itemscount'];

}
