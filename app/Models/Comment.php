<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = "comment";

    protected $fillable = ['id','comment','users_id','product_id'];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
