<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostExtAttribute;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content'
    ];

    public function post_ext_attributes()
    {
        return $this->hasMany(PostExtAttribute::class);
    }
}
