<?php

namespace Database\Seeders;

use App\Models\Users\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(base_path('database/seeders/resources/json/profiles/users.json'));
        $users = json_decode($json, false);

        foreach ($users as $user_data) {
            User::create([
                'name' => $user_data->name,
                'username' => $user_data->username,
                'password' => bcrypt($user_data->password),
            ]);
        }
    }
}
