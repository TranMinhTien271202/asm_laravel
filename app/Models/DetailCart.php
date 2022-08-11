<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailCart extends Model
{
    use HasFactory;

    protected $table = "detailcart";

    protected $fillable = ['id','name','address','phone','desc','cart_id','users_id'];
}
