<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $guarded=['id'];
    protected $fillable=['title', 'excerpt', 'body'];
    use HasFactory;

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
}
