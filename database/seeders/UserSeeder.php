<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/users.json');

        $users = collect(json_decode($json));

        $users->each(function($user){
           user::create([
             'name' => $user->name,
             'email' => $user->email,
             'age' => $user->age,
             'city' => $user->city,
           ]);

        });
    }
}
