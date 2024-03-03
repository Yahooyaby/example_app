<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
//    public function show()
//    {
//        $users = User::all();
//        return view('user.show',['users'=>$users]);
//    }
    public function create()
    {
        return view('user.form');
    }
    public function read(Request $request,User $user)
    {
        if($request->isMethod('post')){
            User::create($request->all());
            return redirect('/read')->with('success', 'Данные пользователя успешно made');
        }

        $users = User::all();
        return view('user.read',['users'=>$users]);
    }

    public function update(Request $request){
        $user = User::find($request->id);
        $user->update($request->all());
        $user->save();
        return redirect('/read')->with('success', 'Данные пользователя успешно обновлены');

    }
    public function edit(User $user){
        return view('user.edit',['user'=>$user]);
    }
    public function delete(User $user){
        $user -> delete();
       return redirect()->back();
    }
}

