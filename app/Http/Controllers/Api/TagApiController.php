<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagApiController extends Controller
{
    public function index(){
        return TagResource::collection(Tag::paginate());
    }

    public function posts(Tag $tag){
        return PostResource::collection($tag->posts);
    }
}
