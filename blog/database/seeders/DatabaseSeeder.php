<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        User::truncate();
        Category::truncate();
        Post::truncate();


       $user= User::factory(10)->create([
            // 'name'=> 'John',
    ]);

    Post::factory(10)->create([
        // 'user_id'=> $user->id
    ]);



    //     $user = User::factory()->create();

    //    $personal= Category::create([
    //         'name' => 'Personal',
    //         'slug' =>'personal'
    //     ]);


    //     $family = Category::create([
    //         'name' => 'Family',
    //         'slug' =>'family'
    //     ]);
        
    //     $work= Category::create([
    //         'name' => 'Work',
    //         'slug' =>'work'
    //     ]);

    //     Post::create([
    //         'user_id'=>$user->id,
    //         'category_id'=>$family->id,
    //         'title'=>'My Family Post',
    //         'slug'=> 'my-family-post',
    //         'excerpt'=> 'dahhhhelllexerpt b2aaa',
    //         'body'=>'dahelbodybta3elfamilydahelbodybta3elfamilydahelbodybta3elfamilydahelbodybta3elfamily'
    //     ]);

    //     Post::create([
    //         'user_id'=>$user->id,
    //         'category_id'=>$work->id,
    //         'title'=>'My Work Post',
    //         'slug'=> 'my-work-post',
    //         'excerpt'=> 'dahhhhelllexerptbta3elwork b2aaa',
    //         'body'=>'dahelbodybta3elfworkkkkdahelbodybta3elfamilydahelbodybta3elfwoooorkydahelbodybta3elfamily'
    //     ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
