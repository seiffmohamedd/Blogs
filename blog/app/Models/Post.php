<?php
namespace App\Models;

class Post{
    public static function find($slug){
        
    $fileDir=__DIR__ . "/../resources/posts/{$postnum}.html";

    if( ! file_exists($fileDir))
    {
        // dd("file does not exist");
        //or use 404

        abort(404);

        //or use redirect to home page

        // return redirect('/');
    }

    $post= file_get_contents($fileDir);

  
    return view('post',[
        'post'=> $post
    ]);
    }
}