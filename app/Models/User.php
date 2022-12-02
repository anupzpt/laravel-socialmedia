<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    //database ko column ko name hunxa
    protected $fillable =['name','email','password'];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
