<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostView extends AbstractView
{
    use HasFactory;

    public function __construct(array $attributes = [])
    {
        $this->mergeFillable(['post_id']);
        parent::__construct($attributes);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
