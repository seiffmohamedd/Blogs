<?php
namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;



class Post
{
    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;
    
    

    public function __construct($title, $excerpt, $date, $body,$slug)
    {

        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }


    public static function all()
    {
    //   return cache()->rememberForever('posts.all',function(){
        return collect(File::files(resource_path("posts")))
        ->map(fn($file)=>YamlFrontMatter::parseFile($file))
        ->map(fn($document)=>new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
            $document->slug
    ))
        ->sortBy('date');
        // ->sortByDesc('date');
    //   }); 
    
    }
    
    public static function find($slug)
    {
        $posts = static::all();
        return $posts-> firstWhere('slug',$slug);
     
    }


// if( ! file_exists($path = resource_path("posts/{$slug}.html")))
// {
//     throw new ModelNotFoundException();
// }

// return cache()->remember("posts.{$slug}",5 , fn() => file_get_contents($path)); //now()->addMinutes() we feeh addHours() bdal ma tekteb secs fel params

}