<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ArticleModel;
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        ArticleModel::factory()
        ->count(20)
        ->create();
      
        $this->call([
          ArticleSeed::class,
        ]);

    }

}
