<?php

namespace App\Http\Resources;

use App\Article;
use App\Tag;
use App\Article_tag;
use App\Http\Resources\TagResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'title'=> $this->title,
            'created_at' => $this->created_at,
            'comment_count' => count(Article::find($this->id)->comments),
            'tags' => TagResource::collection(Article::find($this->id)->tags)
        ];
    }
}
