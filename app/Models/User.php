<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
   public function profile(){
       return $this->Hasone(Profile::class);
   }
protected $fillable=['login','password'];
}

