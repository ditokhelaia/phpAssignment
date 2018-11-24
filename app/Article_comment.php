<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article_comment extends Model
{
    protected $table = 'article_comment';

    public function articles(){
        return $this->belongsToMany(Article::class,Comment::class,'article_id','comment_id');
    }
}
