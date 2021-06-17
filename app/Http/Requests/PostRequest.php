<?php

namespace App\Http\Requests;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'title'=> ['required'],
            'post_content'=> ['required'],
            'category_id'=> ['required'],
            'image'=> ['nullable']
        ];
    }

    public function store(){
        $post = Post::create($this->toArray());
        if ($post!==null && $this->image!==null) {
            Post::storeImage($this->image);
        }
    }

    public function toArray()
    {

        return [
            'title'=> $this->title,
            'post_content'=> $this->post_content,
            'category_id'=> $this->category_id,
            'user_id'=> 1,
            'post_type'=> 'image',
            'image'=> $this->image==null?null:Post::getImageName($this->image),
        ];
    }

}
