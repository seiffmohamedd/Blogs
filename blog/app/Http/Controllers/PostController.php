<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;



class PostController extends Controller
{
    //
    
    public function index()
    {
    
        return view('posts',[
            'posts'=> Post::latest()->filter(request(['search' , 'category']))->get(),
            // 'posts'=> Post::latest()->filter()->get(),
            'categories'=>Category::all(),
            // 'currentCategory'=>Category::where('slug', request('category'))->first()
        ]);

    }
    public function show(Post $post) {
        // ddd($post);
        return view('post',[
            'post'=> $post,
        ]);
    
    }

  
}
