<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return inertia('Admin/Users/Index',
            [
                'users'=>User::query()->paginate(5)
            ]);
    }

    public function create()
    {
        return inertia('Admin/Users/Create');
    }

    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $request->image->store('users', 'public');
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $request->image ? $request->image->hashName() : null,
        ]);
       // return redirect()->to('/admin/users');
        return redirect()->route('users.index')->with('success','کاربر با موفقیت ایجاد شد');
    }


    public function edit($id)
    {
        return inertia('Admin/Users/Edit',[
            'user'=>User::query()->find($id)
        ]);
    }

    public function update($id,Request $request)
    {
        $user =User::find($id);
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password ? \Hash::make($request->password) : $user->password,
        ]);
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('users.index');
    }
}
