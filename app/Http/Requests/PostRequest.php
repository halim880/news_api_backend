<?php

namespace App\Http\Requests;

use App\Models\Post;
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
            'post_titile'=> ['required'],
            'post_content'=> ['required'],
            'post_category_id'=> ['required'],
        ];
    }

    public function store(){
        $post = Post::create($this->toArray());
        $post->sync($this->post_tag);
    }

    public function toArray()
    {
        return [
            'title'=> $this->post_title,
            'content'=> $this->post_content,
            'category_id'=> $this->post_category_id,
            'user_id'=> Auth::user()->id,
            'post_type'=> 'text',
        ];
    }
}
