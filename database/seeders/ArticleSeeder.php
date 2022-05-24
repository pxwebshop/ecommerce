<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();

        $articles =  [
            [
                'title' => 'The Factory is Making its Own Mobile Chipset', 
                'thumb' => 'https://templates.envytheme.com/ejon/default/assets/img/blog/blog-1.jpg',
                'tag' => 'eCommerce', 
                'author' => 'admin', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.', 
                'content' => 'xxx',
                'active' => '1'
            ],
            [
                'title' => 'The Factory is Making its Own Mobile Chipset', 
                'thumb' => 'https://templates.envytheme.com/ejon/default/assets/img/blog/blog-1.jpg',
                'tag' => 'eCommerce', 
                'author' => 'admin', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.', 
                'content' => 'xxx',
                'active' => '1'
            ],
            [
                'title' => 'The Factory is Making its Own Mobile Chipset', 
                'thumb' => 'https://templates.envytheme.com/ejon/default/assets/img/blog/blog-1.jpg',
                'tag' => 'eCommerce', 
                'author' => 'admin', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.', 
                'content' => 'xxx',
                'active' => '1'
            ],
        ];

        Article::insert($articles);
    }
}
