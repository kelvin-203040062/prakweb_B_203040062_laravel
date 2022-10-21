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
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Kelvin Ardiansah",
        "email" => "kelvinardiansah16@gmail.com",
        "image" => "img.jpeg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Kelvin Ardiansah",
            "Body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque rerum nihil veritatis distinctio reiciendis reprehenderit debitis et accusamus magni incidunt, ad quisquam porro inventore pariatur magnam modi sapiente aliquam, alias nulla deserunt repellendus tempora? Dolorem, asperiores quasi rem sit consectetur tempora quae explicabo, similique fuga vero mollitia totam. Corrupti, dolorum vitae delectus maiores reprehenderit placeat perferendis rem perspiciatis quod aut optio impedit eius at minus. Explicabo blanditiis, iusto delectus officiis harum itaque exercitationem vero deserunt sapiente aperiam quis excepturi quaerat!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Keblin",
            "Body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque rerum nihil veritatis distinctio reiciendis reprehenderit debitis et accusamus magni incidunt, ad quisquam porro inventore pariatur magnam modi sapiente aliquam, alias nulla deserunt repellendus tempora? Dolorem, asperiores quasi rem sit consectetur tempora quae explicabo, similique fuga vero mollitia totam. Corrupti, dolorum vitae delectus maiores reprehenderit placeat perferendis rem perspiciatis quod aut optio impedit eius at minus. Explicabo blanditiis, iusto delectus officiis harum itaque exercitationem vero deserunt sapiente aperiam quis excepturi quaerat!"
        ],
    ];
    
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post//
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Kelvin Ardiansah",
            "Body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque rerum nihil veritatis distinctio reiciendis reprehenderit debitis et accusamus magni incidunt, ad quisquam porro inventore pariatur magnam modi sapiente aliquam, alias nulla deserunt repellendus tempora? Dolorem, asperiores quasi rem sit consectetur tempora quae explicabo, similique fuga vero mollitia totam. Corrupti, dolorum vitae delectus maiores reprehenderit placeat perferendis rem perspiciatis quod aut optio impedit eius at minus. Explicabo blanditiis, iusto delectus officiis harum itaque exercitationem vero deserunt sapiente aperiam quis excepturi quaerat!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Keblin",
            "Body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque rerum nihil veritatis distinctio reiciendis reprehenderit debitis et accusamus magni incidunt, ad quisquam porro inventore pariatur magnam modi sapiente aliquam, alias nulla deserunt repellendus tempora? Dolorem, asperiores quasi rem sit consectetur tempora quae explicabo, similique fuga vero mollitia totam. Corrupti, dolorum vitae delectus maiores reprehenderit placeat perferendis rem perspiciatis quod aut optio impedit eius at minus. Explicabo blanditiis, iusto delectus officiis harum itaque exercitationem vero deserunt sapiente aperiam quis excepturi quaerat!"
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"]=== $slug) {
            $new_post = $post;
        }
    }



    return view('post', [
        "title" => "Single post",
        "post" => $new_post
    ]);
});
