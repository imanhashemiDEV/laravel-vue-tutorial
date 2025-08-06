<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($category_id = null)
    {
        return inertia('Front/HomePage/Index',[
            'posts'=> $category_id ? Post::query()->with('category')->where('category_id',$category_id)->get()
                    : Post::query()->with('category')->get(),
            'last_posts'=>Post::query()->latest()->take(4)->get(),
            'categories'=>Category::query()->withCount('posts')->get(),
        ]);
    }


}
