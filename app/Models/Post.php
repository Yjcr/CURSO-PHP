<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    use HasFactory;
    protected $table = "_post";
    // protected $table1 = "users";

    // aca aclaremos la relacion entre la tabla post y la tabla user
    public function user(){
        return $this->belongsto(User::class);
    }
}
