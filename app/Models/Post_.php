<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Mahpudin",
            "slug" => "judul-post-pertama",
            "author" => "Eman",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi magnam recusandae, nostrum error quas modi cupiditate cumque voluptate ipsa itaque et delectus voluptates eveniet aliquam illo in blanditiis vero praesentium magni totam tempore, voluptatum nobis dolor provident? Quis libero sequi hic excepturi, dolorum vitae tempore soluta dignissimos odit praesentium dolorem qui, veritatis id fuga voluptate enim numquam, neque voluptates consectetur officia esse sed dicta maiores. Adipisci, repudiandae doloremque! In eum libero quidem sit consectetur laborum velit totam dolorem error autem.",
        ],
        [
            "title" => "Judul Post Dua",
            "slug" => "judul-post-kedua",
            "author" => "Andika",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi magnam recusandae, nostrum error quas modi cupiditate cumque voluptate ipsa itaque et delectus voluptates eveniet aliquam illo in blanditiis vero praesentium magni totam tempore, voluptatum nobis dolor provident? Quis libero sequi hic excepturi, dolorum vitae tempore soluta dignissimos odit praesentium dolorem qui, veritatis id fuga voluptate enim numquam, neque voluptates consectetur officia esse sed dicta maiores. Adipisci, repudiandae doloremque! In eum libero quidem sit consectetur laborum velit totam dolorem error autem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi magnam recusandae, nostrum error quas modi cupiditate cumque voluptate ipsa itaque et delectus voluptates eveniet aliquam illo in blanditiis vero praesentium magni totam tempore, voluptatum nobis dolor provident? Quis libero sequi hic excepturi, dolorum vitae tempore soluta dignissimos odit praesentium dolorem qui, veritatis id fuga voluptate enim numquam, neque voluptates consectetur officia esse sed dicta maiores. Adipisci, repudiandae doloremque! In eum libero quidem sit consectetur laborum velit totam dolorem error autem.",
        ],
    ];

    public static function all()
    {
        return collect( self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug',$slug);
    }
}
