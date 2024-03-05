<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Profile;

class User extends Model
{
    use HasFactory;
   public function profile() : HasOne
   {
       return $this->hasone(Profile::class);
   }
protected $fillable=['login','password'];
}

