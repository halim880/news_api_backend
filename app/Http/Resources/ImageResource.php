<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
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
            'image_id'=> $this->id,
            'image_url'=> $this->url,
            'image_description'=> $this->description,
            'post_id'=> $this->post_id,
            'is_featured'=> $this->featured,
        ];
    }
}
