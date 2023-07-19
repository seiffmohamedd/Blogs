<?php
namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

use Closure;

use Illuminate\Support\Facades\Factory;



class Post
{

    public static function all()
    {
        $files = File::files(resource_path("posts/"));
        // return array_map(function ($file) {
        //     return $file->get(); // Use get() to fetch the content of the file
        // }, $files);
    }
    


    public static function find($postnum)
    {
    if( ! file_exists($fileDir = resource_path("posts/{$postnum}.html")))
        {
        // dd("file does not exist");
        //or use 404
        // abort(404);
        //or use redirect to home page
        // return redirect('/');
        // or use model not found built in template
            throw new ModelNotFoundException();
        }

        return cache()->remember("posts.{$postnum}",5 , fn() => file_get_contents($fileDir)); //now()->addMinutes() we feeh addHours() bdal ma tekteb secs fel params
            
    }
}