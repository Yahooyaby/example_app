<?php
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name'=>'Maxim',
                'surname'=>'Kuchin',
                'email'=>Str::random(7).'@gmail.com'
            ],
            [
                'name'=>'Ivan',
                'surname'=>'Slyadnev',
                'email'=>Str::random(7).'@gmail.com'
            ],
            [
                'name'=>'Vladislav',
                'surname'=>'Ladygin',
                'email'=>Str::random(7).'@gmail.com'
            ],
            [
                'name'=>'Pavel',
                'surname'=>'Afanasiev',
                'email'=>Str::random(7).'@gmail.com'
            ]
        ];

        foreach ($users as $user) {
            User::($user);
        }

    }
}
