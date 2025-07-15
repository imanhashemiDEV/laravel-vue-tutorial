<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return inertia('Admin/Categories/Index',
            [
                'categories'=>Category::query()->paginate(2)
            ]);
    }

    public function create()
    {
        return inertia('Admin/Categories/Create');
    }

    public function store(Request $request)
    {

        Category::create([
            'title' => $request->title,
        ]);
        // return redirect()->to('/admin/users');
        return redirect()->route('categories.index')->with('success','دسته بندی با موفقیت ایجاد شد');
    }


    public function edit($id)
    {
        return inertia('Admin/Categories/Edit',[
            'category'=>Category::query()->find($id)
        ]);
    }

    public function update($id,Request $request)
    {
        $category =Category::query()->find($id);
        $category->update([
            'title'=>$request->title,
        ]);
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('categories.index');
    }
}
