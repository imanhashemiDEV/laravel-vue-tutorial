<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post()
    {
        return inertia('Front/PostsPage/Post',);
    }
}
