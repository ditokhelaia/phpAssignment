<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article_tag extends Model
{
    protected $table = 'article_tag';

    public function articles(){
        return $this->belongsToMany(Article::class,Tag::class,'article_id','tag_id');
    }
}
