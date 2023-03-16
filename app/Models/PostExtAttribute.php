<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostExtAttribute extends Model
{
    public function post_ext_attributes()
    {
        return $this->hasMany(PostExtAttribute::class);
    }
}
