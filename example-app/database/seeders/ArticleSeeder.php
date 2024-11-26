<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); 
        $numberOfArticles = 10; 

        for ($i = 0; $i < $numberOfArticles; $i++) {
            DB::table('articles')->insert([
                'title' => $faker->sentence(6, true), // Génère un titre aléatoire
                'image_path' => 'articles/' . $faker->image('storage/app/public/articles', 640, 480, null, false), // Génère une fausse image
                'summary' => $faker->text(150), 
                'content' => $faker->paragraphs(5, true), // Génère un contenu avec 5 paragraphes
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
