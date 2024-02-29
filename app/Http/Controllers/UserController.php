<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;
use App\Models\User;


class UserController extends Controller
{
    public function show()
    {
        $user = User::find(1);
        dump($user->profile->name);

    }
}
