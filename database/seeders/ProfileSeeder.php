<?php

namespace Database\Seeders;

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
        DB::table('profiles')->insert([
           ['name'=>'Maxim',
            'surname'=>'Kuchin',
            'email'=>Str::random(7).'gmail.com'],
            ['name'=>'Ivan',
                'surname'=>'Slyadnev',
                'email'=>Str::random(7).'gmail.com'],
            ['name'=>'Vladislav',
                'surname'=>'Ladygin',
                'email'=>Str::random(7).'gmail.com'],
            ['name'=>'Pavel',
                'surname'=>'Afonasiev',
                'email'=>Str::random(7).'gmail.com']
        ]);
    }
}
