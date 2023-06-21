<?php

namespace Database\Seeders;

use File;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/users.json');
        $users = json_decode($json);

        foreach($users as $user){
            User::create([
                "full_name" => $user->full_name,
                "email" => $user->email,
                "password" => $user->password,
                "picture" => $user->picture,
                "role_id" => $user->role_id,
                "updated_at" => now(),
                "created_at" => now()
            ]);
        }
    }
}
