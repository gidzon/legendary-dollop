<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;


class AdminCategoryController extends Controller
{
    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->input('category');
        $category->save();
        return redirect()->back();
    }

    public function show()
    {
        return view('admin.category.show', [
            'categories' => Category::get(),
        ]);
    }

    public function update(Request $request)
    {
        $category = Category::find($request->input('id'));
        $category->name = $request->input('category');
        $category->save();
        return redirect()->route('admin.category.show');
    }

    public function edit(Request $request, $name, $id)
    {
        return view('admin.category.edit', [
            'name' => $name,
            'id' => $id,
        ]);
    }

    public function delete(Request $request, $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();

    }
}
