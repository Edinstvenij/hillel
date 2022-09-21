<?php

namespace Hillel\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


    public function categories()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
