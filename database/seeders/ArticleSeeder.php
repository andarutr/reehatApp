<?php

namespace Database\Seeders;

use File;
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
        $json = File::get('database/data/articles.json');
        $articles = json_decode($json);

        foreach($articles as $article){
            Article::create([
                'title' => $article->title,
                'description' => $article->description,
                'picture' => $article->picture,
                'url' => $article->url,
                'updated_at' => now(),
                'created_at' => now()
            ]);
        }
    }
}
