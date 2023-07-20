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

    $files= File::files(resource_path("posts/"));

    $posts=[];

    foreach($files as $file){

    $document = YamlFrontMatter::parseFile($file);

    $posts[]= new Post(
        $document->title,
        $document->excerpt,
        $document->date,
        $document->body(),
        $document->slug
    );

    }
    // $document = YamlFrontMatter::parseFile(resource_path('posts/my-fourth-post.html'));

  
    // ddd($posts);
  
    // $posts= Post::all();
    return view('posts',[
        'posts'=> $posts
    ]);
});

Route::get('/posts/{post}',function($slug){

    
    return view('post',[
        'post'=> Post::find($slug)
    ]);

})-> where('post','[A-z_\-]+');

//u can use multiple methods whereAlphaNumeric means it allows alphabetic and nums 

 
// return view('post' , [
//     'post' => Post::find($slug) 

// ]);





