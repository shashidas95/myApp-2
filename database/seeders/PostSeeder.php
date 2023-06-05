<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //first method
        // Post::factory(5)->create();

        //third method
        // Post::create(
        //     [
        //         'title'        => 'post-one',
        //         'slug'         =>'post-one',
        //         'excerpt'      => 'excerpt of post one',
        //         'description'  =>'description of post one',
        //         'is_published' =>true,
        //         'min_to_read'  =>2,
        //     ]
        // );

        //fourth method
    //         $posts = collect([
    //         [   'title'        => 'post-two',
    //             'slug'         =>'post-two',
    //             'excerpt'      => 'excerpt of post two',
    //             'description'  =>'description of post two',
    //             'is_published' =>true,
    //             'min_to_read'  =>2,
    //         ],
    //          [
    //             'title'        => 'post-three',
    //             'slug'         =>'post-three',
    //             'excerpt'      => 'excerpt of post three',
    //             'description'  =>'description of post three',
    //             'is_published' =>true,
    //             'min_to_read'  =>2,
    //         ]
    //     ]);

    //    // dd($posts);
    //     $posts->each(function($post){
    //         Post::create($post);
    //     });

        //method five
        $json = File::get('database/json/posts.json');
        $posts = collect(json_decode($json));

        $posts->each(function($post){


        Post::create(
            [
                'title'        => $post->title,
                'slug'         =>$post->slug,
                'excerpt'      => $post->excerpt,
                'description'  =>$post->description,
                'is_published' =>$post->is_published,
                'min_to_read'  =>$post->min_to_read,
            ]
        );
    });
    }
}
