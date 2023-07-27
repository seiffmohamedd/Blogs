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


    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false , fn($query, $search)=>
            $query
                ->where('title', 'like' , '%' . $search . '%')
                ->orWhere('body', 'like' , '%' . $search . '%')

    );

    // $query->when($filters['category'] ?? false , fn($query, $category)=>
    //     $query->whereHas('category', fn($query)=>$query->where('slug', $category )));

    }

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
