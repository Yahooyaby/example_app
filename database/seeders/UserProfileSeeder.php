<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user' => [
                    'login' => 'Yahooyaby',
                    'password' => Hash::make(Str::random(7)),
                ],
                'profile' => [
                    'name' => 'Maxim',
                    'surname' => 'Kuchin',
                    'email' => Str::random(7).'gmail.com'
                ],
            ],
            [
                'user' => [
                    'login' => 'Kvakusha',
                    'password' => Hash::make(Str::random(7)),
                ],
                'profile' => [
                    'name' => 'Ivan',
                    'surname' => 'Slyadnev',
                    'email' => Str::random(7).'gmail.com'
                ],
            ],
            [
                'user' => [
                    'login' => 'Lady_gin',
                    'password' => Hash::make(Str::random(7)),
                ],
                'profile' => [
                    'name' => 'Vladislav',
                    'surname' => 'Ladygin',
                    'email' => Str::random(7).'gmail.com'
                ],
            ],
            [
                'user' => [
                    'login' => 'Intrider',
                    'password' => Hash::make(Str::random(7)),
                ],
                'profile' => [
                    'name' => 'Pavel',
                    'surname' =>' Afonasiev',
                    'email' => Str::random(7).'gmail.com',
                ],
            ]
        ];

        foreach ($data as $value) {
            $user = User::updateOrCreate($value['user']);
            $user->profile()->updateOrCreate($value['profile']);
        }
    }
}
