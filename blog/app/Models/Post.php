<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $guarded=['id'];
    protected $fillable=['title', 'excerpt', 'body','category_id','slug'];
    protected $with=['category','author'];
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
        //hasOne hasMany belongsTo ,belongsToMany
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
}
