<?php

use App\Http\Controllers\PostController;
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



Route::get('/',[PostController::class, 'index'])->name('home');

Route::get('/posts/{post:slug}',[PostController::class , 'show'] //post paramter should be passed the same name as the wildcard
//el post:slug deh m3naha eh b2a Post::where('slug',$post)->firstOrFail(); m3naha eny hashof el match mn el passed slug l el post el mo3yn we hgeeb awel result ytla3ly
);

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





