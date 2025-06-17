<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->to('/admin/users');
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
        return redirect()->to('/admin/users');
    }


}
