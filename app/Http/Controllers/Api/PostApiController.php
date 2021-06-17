<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    public function index(){
        return PostResource::collection(Post::orderBy("created_at", "desc")->get()->take(20));
    }

    public function store(PostRequest $request){
        $request->store();
    }
}
