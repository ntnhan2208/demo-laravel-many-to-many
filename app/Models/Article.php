<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'sluck', 'description','status','admin_id'];
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function admin(){
        return  $this->belongsTo(Admin::class);
    }
}
