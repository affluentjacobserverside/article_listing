<?php

namespace Database\Seeders;

use App\Models\ArticleModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ArticleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('articles')->insert([
         'article_cover' => 'https://via.placeholder.com/150',
         'article_title'=>'Article Listing One',
         'tags'=> 'listing tag one',
         'likes'=>'1',
         'article_description'=> 'This is testting of article listing',
         'comments'=> 'the is the first article comments'
        ]);
       
    }
}
