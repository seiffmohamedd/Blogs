<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

    return view('posts');
});

    Route::get('/posts/{post}',function($slug){

    $path=__DIR__ . "/../resources/posts/{$slug}.html";

    if( ! file_exists($path))
    {
        // dd("file does not exist");
        //or use 404
        // abort(404);
        //or use redirect to home page
        return redirect('/');
    }


    $post = cache()->remember("posts.{$slug}",5 , function() use ($path){ //now()->addMinutes() we feeh addHours() bdal ma tekteb secs fel params
        var_dump('file_get_contents');
        return file_get_contents($path);
    });

  
    return view('post',[
        'post'=> $post
]);

       
})-> where('post','[A-z_\-]+');

//u can use multiple methods whereAlphaNumeric means it allows alphabetic and nums 

   







// return view('post' , [
//     'post' => Post::find($slug) 

// ]);





