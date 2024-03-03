<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Http;

class ProfileController extends Controller
{
    public function show(){
        $profiles =Profile::all();
        return view('user.show',['profiles'=>$profiles]);
    }

    public function form(Request $request){
        if ($request->has('title') && $request->has('slug')){
            $data = $request->except('title');
            dump($data);
            }
        return view('profile.form');
    }

    public function result(Request $request){
        $title = $request->input('title');
        $slug = $request->input('slug');
        return view('profile.result',['title'=>$title,'slug'=>$slug]);
    }
}
