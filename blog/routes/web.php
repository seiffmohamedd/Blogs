<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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



Route::get('/',function(){

    $posts=Post::all();
    
    return view('posts',[
        'posts'=> $posts
    ]);
});

Route::get('/posts/{post:slug}',function(Post $post){ //post paramter should be passed the same name as the wildcard
//el post:slug deh m3naha eh b2a Post::where('slug',$post)->firstOrFail(); m3naha eny hashof el match mn el passed slug l el post el mo3yn we hgeeb awel result ytla3ly
    // ddd($post);
    return view('post',[
        'post'=> $post
    ]);

});

// -> where('post','[A-z_\-]+');

//u can use multiple methods whereAlphaNumeric means it allows alphabetic and nums 

 
// return view('post' , [
//     'post' => Post::find($slug) 

// ]);





