<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;



class PostController extends Controller
{
    //
    
    public function index(){
        $posts=Post::latest();


    if(request('search')){
        $posts->where('title', 'like' , '%' . request('search') . '%')
        ->orWhere('body', 'like' , '%' . request('search') . '%')
        ->orWhere('excerpt', 'like' , '%' . request('search') . '%');

    }
    return view('posts',[
        'posts'=> $posts->get(),
        'categories'=>Category::all()
    ]);

    }
    public function show(Post $post) {
        // ddd($post);
        return view('post',[
            'post'=> $post,
        ]);
    
    }
}
