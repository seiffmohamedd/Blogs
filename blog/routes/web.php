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


    return view('posts' , [
        'posts' => Post::all() 

    ]);
});

    Route::get('/post/{post}',function($postnum){

        return view('post' , [
            'post' => Post::find($postnum) 
    
        ]);
})-> where('post','[A-z_\-]+');

//u can use multiple methods whereAlphaNumeric means it allows alphabetic and nums 

    // $fileDir=__DIR__ . "/../resources/posts/{$postnum}.html";

    // if( ! file_exists($fileDir))
    // {
    //     // dd("file does not exist");
    //     //or use 404
    //     abort(404);
    //     //or use redirect to home page
    //     // return redirect('/');
    // }


    // $post = cache()->remember("posts.{$postnum}",5 , function() use ($fileDir){ //now()->addMinutes() we feeh addHours() bdal ma tekteb secs fel params
    //     var_dump('file_get_contents');
    //     return file_get_contents($fileDir);
    // });

  
    // return view('post',[
    //     'post'=> $post
    // ]);