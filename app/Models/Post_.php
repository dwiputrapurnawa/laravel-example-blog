<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ida Bagus Dwi Putra Purnawa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, consequatur repellendus delectus officiis necessitatibus quae architecto, autem aut dolorum ratione aperiam? Veniam possimus cumque quaerat odit explicabo tempora, modi nisi ipsa! Dignissimos harum, voluptatem perferendis eveniet blanditiis ex vero! Ducimus ab tempora iusto, aliquam laborum cupiditate laboriosam, velit non pariatur sequi eius! Omnis eligendi libero reprehenderit consectetur maiores asperiores, velit ex saepe voluptate qui maxime at aspernatur blanditiis veritatis delectus."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Eric Cornetto",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam repellat deserunt inventore rem voluptatem. Illo ducimus quasi nemo quaerat molestias corrupti, tempore, laudantium explicabo, ea ipsa blanditiis! Id at rerum esse saepe beatae magnam asperiores possimus officia itaque laborum earum, nobis labore odit ipsum. Libero voluptatibus officiis quisquam accusantium. Esse eveniet eligendi, vitae voluptatum consectetur fugit quas in facilis. Cupiditate tempora optio repudiandae voluptatibus unde dolorem laborum tempore, magnam ex voluptatem beatae doloremque a repellendus quasi facilis ab tenetur totam quam, fugiat et blanditiis? Vero molestias mollitia amet exercitationem, expedita quis eum enim. Porro, aliquid. Consequuntur temporibus quae facilis culpa?"
        ],
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {

        $posts = static::all();

        return $posts->firstWhere("slug", $slug);
    }
}
