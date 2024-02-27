<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
     public function show()
     {
         DB::enableQueryLog();
         DB::table('posts')->where('id', '!=', 3)->get();
         dump(DB::getQueryLog());
//         return view('post.show',['posts'=>$posts]);
         }

}
