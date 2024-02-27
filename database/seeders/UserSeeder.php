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
                'login'=>'Yahooyaby',
                'password'=>Hash::make(Str::random(7))
            ],
            [
                'login'=>'Kvakusha',
                'password'=>Hash::make(Str::random(7))
            ],
            [
                'login'=>'Lady_gin',
                'password'=>Hash::make(Str::random(7))
            ],
            [
                'login'=>'Intrider',
                'password'=>Hash::make(Str::random(7))
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }

    }
}
