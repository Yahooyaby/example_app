<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'login',
        'password',
    ];
    public function profile(): HasOne
    {
       return $this->Hasone(Profile::class);
    }

}

