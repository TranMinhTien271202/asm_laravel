<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    use HasFactory;

    use HasFactory;
    public $table = "order";
    protected $fillable = [
        'name',
        'phone',
        'note',
        'status',
        'address',
        'totalall',
        'quantily',
        'product_id'
    ];
    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
