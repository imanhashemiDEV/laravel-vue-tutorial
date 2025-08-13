<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post($id)
    {
        return inertia('Front/PostPage/Post',[
            'post'=> Post::query()->find($id),
            'last_posts'=>Post::query()->latest()->take(4)->get(),
            'categories'=>Category::query()->withCount('posts')->get(),
        ]);
    }
}
