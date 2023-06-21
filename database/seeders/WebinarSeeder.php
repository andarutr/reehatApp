<?php

namespace Database\Seeders;

use File;
use App\Models\Webinar;
use Illuminate\Database\Seeder;

class WebinarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/webinars.json');
        $webinars = json_decode($json);

        foreach($webinars as $webinar){
            Webinar::create([
                "title" => $webinar->title,
                "thumbnail" => $webinar->thumbnail,
                "description" => $webinar->description,
                "mentor" => $webinar->mentor,
                "cost" => $webinar->cost,
                "video_url" => $webinar->video_url,
                "url" => $webinar->url,
                "updated_at" => now(),
                "created_at" => now()
            ]);
        }
    }
}
