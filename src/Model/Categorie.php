<?php

namespace Hillel\Model;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
