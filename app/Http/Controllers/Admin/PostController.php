<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
                'posts'=>Post::query()->paginate(5)
            ]);
    }

    public function create()
    {
        return inertia('Admin/Posts/Create',[
            'categories'=>Category::query()->get(),
        ]);
    }

    public function store(UserRequest $request)
    {
        if($request->hasFile('image')){
            $request->image->store('posts', 'public');
        }
        Post::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $request->image ? $request->image->hashName() : null,
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
