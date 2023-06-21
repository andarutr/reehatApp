<?php

namespace Database\Seeders;

use File;
use App\Models\TimeManagement;
use Illuminate\Database\Seeder;

class TimeManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/time_management.json');
        $time_management = json_decode($json);

        foreach($time_management as $tm){
            TimeManagement::create([
                "user_id" => $tm->user_id,
                "aplikasi" => $tm->aplikasi,
                "batas_penggunaan" => $tm->batas_penggunaan,
                "periode" => $tm->periode,
                "updated_at" => now(),
                "created_at" => now()
            ]);
        }
    }
}
