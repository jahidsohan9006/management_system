<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('users')->insert([

                'name' => Str::random(5),
                'email' => Str::random(5) . '@mail.com',
                'phone' => mt_rand(100000000, 999999999), // Generates a random 9-digit numeric string
            ]);
        }
    }
}
