<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});
Route::get('/about', function () {
    return view(
        'about',
        [
            "title" => "about",
            "name" => "Mahpudin",
            "email" => "pudinmah4@gmail.com",
            "image" => "people2.jpg"
        ]
    );
});



Route::get('/blog', function () {
    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Mahpudin",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi magnam recusandae, nostrum error quas modi cupiditate cumque voluptate ipsa itaque et delectus voluptates eveniet aliquam illo in blanditiis vero praesentium magni totam tempore, voluptatum nobis dolor provident? Quis libero sequi hic excepturi, dolorum vitae tempore soluta dignissimos odit praesentium dolorem qui, veritatis id fuga voluptate enim numquam, neque voluptates consectetur officia esse sed dicta maiores. Adipisci, repudiandae doloremque! In eum libero quidem sit consectetur laborum velit totam dolorem error autem.",
        ],
        [
            "title" => "Judul Post Dua",
            "slug"=> "judul-post-kedua",
            "author" => "Dodi",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi magnam recusandae, nostrum error quas modi cupiditate cumque voluptate ipsa itaque et delectus voluptates eveniet aliquam illo in blanditiis vero praesentium magni totam tempore, voluptatum nobis dolor provident? Quis libero sequi hic excepturi, dolorum vitae tempore soluta dignissimos odit praesentium dolorem qui, veritatis id fuga voluptate enim numquam, neque voluptates consectetur officia esse sed dicta maiores. Adipisci, repudiandae doloremque! In eum libero quidem sit consectetur laborum velit totam dolorem error autem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi magnam recusandae, nostrum error quas modi cupiditate cumque voluptate ipsa itaque et delectus voluptates eveniet aliquam illo in blanditiis vero praesentium magni totam tempore, voluptatum nobis dolor provident? Quis libero sequi hic excepturi, dolorum vitae tempore soluta dignissimos odit praesentium dolorem qui, veritatis id fuga voluptate enim numquam, neque voluptates consectetur officia esse sed dicta maiores. Adipisci, repudiandae doloremque! In eum libero quidem sit consectetur laborum velit totam dolorem error autem.",
        ],
    ];

    return view('posts', [
        "title" => "post",
        "posts"=>$blog_post,
    ]);
});


// halaman singgle post
Route::get('posts/{slug}', function($slug){

    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Mahpudin",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi magnam recusandae, nostrum error quas modi cupiditate cumque voluptate ipsa itaque et delectus voluptates eveniet aliquam illo in blanditiis vero praesentium magni totam tempore, voluptatum nobis dolor provident? Quis libero sequi hic excepturi, dolorum vitae tempore soluta dignissimos odit praesentium dolorem qui, veritatis id fuga voluptate enim numquam, neque voluptates consectetur officia esse sed dicta maiores. Adipisci, repudiandae doloremque! In eum libero quidem sit consectetur laborum velit totam dolorem error autem.",
        ],
        [
            "title" => "Judul Post Dua",
            "slug"=> "judul-post-kedua",
            "author" => "Dodi",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi magnam recusandae, nostrum error quas modi cupiditate cumque voluptate ipsa itaque et delectus voluptates eveniet aliquam illo in blanditiis vero praesentium magni totam tempore, voluptatum nobis dolor provident? Quis libero sequi hic excepturi, dolorum vitae tempore soluta dignissimos odit praesentium dolorem qui, veritatis id fuga voluptate enim numquam, neque voluptates consectetur officia esse sed dicta maiores. Adipisci, repudiandae doloremque! In eum libero quidem sit consectetur laborum velit totam dolorem error autem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi magnam recusandae, nostrum error quas modi cupiditate cumque voluptate ipsa itaque et delectus voluptates eveniet aliquam illo in blanditiis vero praesentium magni totam tempore, voluptatum nobis dolor provident? Quis libero sequi hic excepturi, dolorum vitae tempore soluta dignissimos odit praesentium dolorem qui, veritatis id fuga voluptate enim numquam, neque voluptates consectetur officia esse sed dicta maiores. Adipisci, repudiandae doloremque! In eum libero quidem sit consectetur laborum velit totam dolorem error autem.",
        ],
    ];

    $new_post = [];
    foreach($blog_post as $post) {
        if($post["slug"]==$slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title"=> "Single Post",
        "post"=> $new_post
    ]);
});
