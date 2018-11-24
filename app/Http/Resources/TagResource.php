<?php

namespace App\Http\Resources;

use App\Article;
use App\Tag;
use App\Article_tag;
use Illuminate\Http\Resources\Json\JsonResource;


class TagResource extends JsonResource
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
            'article_count' => count(Tag::find($this->id)->articles)
        ];
    }
}
