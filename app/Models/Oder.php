<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    use HasFactory;

    use HasFactory;
    public $table = "detailcart";
    protected $fillable = [
        'name',
        'phone',
        'desc',
        'status',
        'users_id',
        'address',
        'cart_id',
        'product_id'
    ];
    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
    public function order_details(){
        return $this->hasMany(OrderDetail::class, 'cart_id', 'id');
    }
}
