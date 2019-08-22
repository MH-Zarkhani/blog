<?php

namespace App;


class Category extends BaseModel
{
// Relations
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
