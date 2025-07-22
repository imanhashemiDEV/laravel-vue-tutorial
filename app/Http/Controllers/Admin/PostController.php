<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Http\Requests\UserRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    public function index()
    {
        return inertia('Admin/Posts/Index',
            [
                'posts'=>Post::query()->with('category','user')->paginate(5)
            ]);
    }

    public function create()
    {
        return inertia('Admin/Posts/Create',[
            'categories'=>Category::query()->get(),
        ]);
    }

    public function store(PostRequest $request)
    {
        if($request->hasFile('image')){
            $request->image->store('posts', 'public');
        }
        Post::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'user_id' => 2,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'image' => $request->image->hashName()
        ]);
        return redirect()->route('posts.index')->with('success','پست با موفقیت ایجاد شد');
    }


    public function edit($id)
    {
        return inertia('Admin/Posts/Edit',[
            'post'=>Post::query()->find($id)
        ]);
    }

    public function update($id,Request $request)
    {
        $post =Post::find($id);
        $post->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password ? \Hash::make($request->password) : $post->password,
        ]);
        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('posts.index');
    }
}
