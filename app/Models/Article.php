<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'sluck', 'description','status'];
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
