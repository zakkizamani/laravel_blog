<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Post Pertama",
            'slug' => "post-pertama",
            "author" => "Zakki Zamani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, nisi architecto! Vel aut quam voluptates veritatis ut reiciendis molestias fuga possimus nobis iusto, natus sequi voluptatem, earum at fugit sit provident sint exercitationem laudantium, quae quos. Eveniet dolorem similique, hic reiciendis sunt sapiente, molestiae eos suscipit magni repellendus doloremque impedit possimus? Laudantium tempora atque, cum est reprehenderit doloremque voluptas quisquam blanditiis accusamus, consequatur praesentium labore commodi ab nobis accusantium incidunt natus eligendi dignissimos porro placeat voluptate alias. Cumque, soluta omnis!"
        ],
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Dody",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, nisi architecto! Vel aut quam voluptates veritatis ut reiciendis molestias fuga possimus nobis iusto, natus sequi voluptatem, earum at fugit sit provident sint exercitationem laudantium, quae quos. Eveniet dolorem similique, hic reiciendis sunt sapiente, molestiae eos suscipit magni repellendus doloremque impedit possimus? Laudantium tempora atque, cum est reprehenderit doloremque voluptas quisquam blanditiis accusamus, consequatur praesentium labore commodi ab nobis accusantium incidunt natus eligendi dignissimos porro placeat voluptate alias. Cumque, soluta omnisLorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, nisi architecto! Vel aut quam voluptates veritatis ut reiciendis molestias fuga possimus nobis iusto,!"
        ],
        [
            "title" => "Post Ketiga",
            "slug" => "post-ketiga",
            "author" => "Mas Harjo",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, nisi architecto! Vel aut quam voluptates veritatis ut reiciendis molestias fuga possimus nobis iusto, natus sequi voluptatem, earum at fugit sit provident sint exercitationem laudantium, quae quos. Eveniet dolorem similique, hic reiciendis sunt sapiente, molestiae eos suscipit magni repellendus doloremque impedit possimus? Laudantium tempora atque, cum est reprehenderit doloremque voluptas quisquam blanditiis accusamus, consequatur praesentium labore commodi ab nobis accusantium incidunt natus eligendi dignissimos porro placeat voluptate alias. Cumque, soluta omnisLorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, nisi architecto! Vel aut quam voluptates veritatis ut reiciendis molestias fuga possimus nobis iusto,!"
        ]
    ];

    public static function all()
    {
        // dd(collect(self::$blog_posts));
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $post = static::all();

        return $post->firstWhere('slug', $slug);
    }
}
