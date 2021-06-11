<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'category_title'=> ['required'],
            'category_color'=> ['required']
        ];
    }

    public function store(){
        Category::create($this->toArray());
    }

    public function toArray()
    {
        return [
            'title'=> $this->category_title,
            'color'=> $this->category_color,
        ];
    }
}
