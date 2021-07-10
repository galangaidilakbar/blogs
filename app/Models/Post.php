<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Galang aidil akbar",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus, iusto alias ad laborum dolorum deleniti aspernatur, quae temporibus est ea nihil ratione assumenda aliquam earum unde accusamus doloribus itaque quas. Magnam, magni voluptatum adipisci quod asperiores sint pariatur eligendi officia suscipit optio aperiam, aliquam porro cupiditate consequatur exercitationem ad dolorum laudantium aspernatur repudiandae officiis. Quos earum amet atque, a repellat voluptate necessitatibus eius pariatur ipsum harum molestias aut? Fugiat fuga, nam accusamus qui placeat facilis impedit enim pariatur ut hic!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Nela Puspita Sari",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi maiores labore neque. Corporis a consequuntur placeat ipsa modi porro excepturi odit rerum, iure praesentium sequi ex officia facere suscipit eum laborum numquam quaerat officiis error velit! Nesciunt autem dignissimos quis cum, error aliquam dicta delectus doloremque in, vel facilis, tenetur molestias tempore ullam aliquid officia exercitationem eos modi perspiciatis harum! Voluptas dolore mollitia cupiditate dolores rerum eos nemo corrupti, perferendis, maiores expedita repudiandae. Nulla nihil dignissimos illum minima similique ipsum aliquid iste dolorem. Eaque accusamus ipsum odio, officia alias libero ullam laudantium eos eveniet voluptate consequatur repudiandae optio amet. Porro?"
        ]
    ];

    public static function getAllPost()
    {
        return collect(self::$blog_posts);
    }

    public static function getSpecificPost($slug)
    {
        return static::getAllPost()->firstWhere('slug', $slug);
    }
}
