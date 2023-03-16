<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostExtAttribute extends Model
{
    protected $table = 'post_ext_attributes';
    protected $fillable = [
        'post_id',
        'rubric',
    ];

    public function post_ext_attributes()
    {
        return $this->belongsTo(Post::class);
    }
}
