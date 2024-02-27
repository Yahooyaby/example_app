<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profiles = [
            [
                'name'=>'Maxim',
                'surname'=>'Kuchin',
                'email'=>Str::random(7).'gmail.com',
                'user_id' => 1
            ],
            [
                'name'=>'Ivan',
                'surname'=>'Slyadnev',
                'email'=>Str::random(7).'gmail.com',
                'user_id' => 2
            ],
            [
                'name'=>'Vladislav',
                'surname'=>'Ladygin',
                'email'=>Str::random(7).'gmail.com',
                'user_id' => 3
            ],
            [
                'name'=>'Pavel',
                'surname'=>'Afonasiev',
                'email'=>Str::random(7).'gmail.com',
                'user_id' => 4
            ]
        ];

        foreach ($profiles as $profile) {
            Profile::updateOrCreate($profile);
        }
    }
}
