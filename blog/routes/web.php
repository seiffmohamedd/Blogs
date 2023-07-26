<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('posts');
// });



Route::get('/',function()
{
    // dd(request('search'));

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
    
})->name('home');

Route::get('/posts/{post:slug}',function(Post $post){ //post paramter should be passed the same name as the wildcard
//el post:slug deh m3naha eh b2a Post::where('slug',$post)->firstOrFail(); m3naha eny hashof el match mn el passed slug l el post el mo3yn we hgeeb awel result ytla3ly
    // ddd($post);
    return view('post',[
        'post'=> $post,
    ]);

});

Route::get('categories/{category:slug}',function(Category $category){

    return view('posts',[
     'posts'=> $category ->posts ,
     'currentCategory'=>$category,
     'categories'=>Category::all()
    ]);

})->name('category');


Route::get('authors/{author:username}',function(User $author){

    return view('posts',[
     'posts'=> $author->posts,
     'categories'=>Category::all()

    ]);

});

// -> where('post','[A-z_\-]+');

//u can use multiple methods whereAlphaNumeric means it allows alphabetic and nums 

 
// return view('post' , [
//     'post' => Post::find($slug) 

// ]);





