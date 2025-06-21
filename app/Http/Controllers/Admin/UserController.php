<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return inertia('Admin/Users/Index',
            [
                'users'=>User::query()->get()
            ]);
    }

    public function create()
    {
        return inertia('Admin/Users/Create');
    }

    public function store(UserRequest $request)
    {
        User::create($request->all());
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
