<?php

namespace App\Models;



class Post 
{
    private static $blog_posts =
    [
        [
            "title" => "Judul Blog Pertama",
            "slug" => "judul-post-perama",
            "author" => "Febi Fiantika",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, sed. 
        Aliquam saepe omnis minus veniam voluptatibus! Quasi doloribus dolor pariatur 
        sunt fugiat necessitatibus quas odio consequatur et totam, veniam harum qui laborum
        architecto adipisci quae cum ut sit in repellat! Provident reprehenderit vel aut 
        facere distinctio sequi quod exercitationem fugit asperiores et itaque corporis, 
        consectetur tenetur, numquam atque, doloremque rerum eveniet! Officia, ad quisquam 
        repudiandae deleniti quo suscipit, labore quaerat quidem enim vel veniam a, aperiam 
        ipsa eaque debitis nisi!"
        ],
        [
            "title" => "Judul Blog Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Febi Fiantika",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, sed. 
        Aliquam saepe omnis minus veniam voluptatibus! Quasi doloribus dolor pariatur 
        sunt fugiat necessitatibus quas odio consequatur et totam, veniam harum qui laborum
        architecto adipisci quae cum ut sit in repellat! Provident reprehenderit vel aut 
        facere distinctio sequi quod exercitationem fugit asperiores et itaque corporis, 
        consectetur tenetur, numquam atque, doloremque rerum eveniet! Officia, ad quisquam 
        repudiandae deleniti quo suscipit, labore quaerat quidem enim vel veniam a, aperiam 
        ipsa eaque debitis nisi!"
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    } 

    public static function find($slug) {
        $posts = static::all();

        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //     $post = $p;
        //     }
        // }
        return $posts -> firstWhere('slug', $slug);
    }
    
}
