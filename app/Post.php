<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    protected $guarded = ['id'];

    public static function storePost($title, $content)
    {
        $post = new Post();
        $post->title = $title;
        $post->content = $content;
        $post->user_id = Auth::id();
        return $post->save();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
