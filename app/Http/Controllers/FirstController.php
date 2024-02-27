<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class FirstController extends Controller
{
    public function show():View
    {

        return view('post.vanya_chmo',['name'=>'#553333','age'=> 18,'salary'=>[[10,15,25],[40,60,80]]]) ;
    }

    public function all():View
    {
        return view('post.show', [
            'title' => 'page title',
            'text'  => 'page content',
        ]);
    }
}
