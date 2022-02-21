<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable=['name','email'];
    function articles(){
        return $this->hasMany(Article::class);
    }

    public function getPasswordAttribute($value){
        return decrypt($value);
    }

    public function setPasswordAttribute($value){
        $this->attributes['password']=bcrypt($value);
    }
}
