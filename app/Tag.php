<?php

namespace App;


class Tag extends BaseModel
{
// Relations
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
