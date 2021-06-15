<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\PostResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryApiController extends Controller
{

    public function index(){
        return CategoryResource::collection(Category::all());
    }
    public function store(CategoryRequest $request){
        $request->store();
    }

    public function show(Category $category){
        return new CategoryResource($category);
    }

    public function posts(Category $category){
        return PostResource::collection($category->posts()->get()->take(10));
    }
}
