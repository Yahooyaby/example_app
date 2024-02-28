<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\User;

class Profile extends Model
{
    use HasFactory;

    public function user():HasOne
    {
        return $this->hasOne(User::class);
    }
    protected $fillable =['name','surname','email','user_id'];
}
