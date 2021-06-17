<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'post_id'=> $this->id,
            'post_title'=> $this->title,
            'post_content'=> $this->content,
            'post_type'=> $this->post_type,
            'comments'=> CommentResource::collection($this->comments),
            'category'=> new CategoryResource($this->category),
            'post_meta'=> $this->meta_data,
            'updated_at'=> $this->updated_at,
            'author'=> new AuthorResource($this->user),
            'image'=> $this->getImageUrl(),
            'tags'=> TagResource::collection($this->tags),
        ];
    }
}
