<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AuthorResource;
use App\Http\Resources\PostResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function index(){
        return AuthorResource::collection(User::paginate());
    }

    public function posts(User $author){
        return PostResource::collection($author->posts);
    }
}
