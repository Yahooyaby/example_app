<?php
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')-> insert([
            ['login'=>'Yahooyaby',
                'password'=> Hash::make(Str::random(8)),
                ],
            ['login'=>'KVAKA',
                'password'=> Hash::make(Str::random(8)),
            ],
            ['login'=>'Lady_gin',
                'password'=> Hash::make(Str::random(7)),
            ]
            ]);

    }
}
