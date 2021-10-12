<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminProductAttributeController extends Controller
{
    public function store(Request $request)
    {
        if (\App\ProductAttribute::create($request->all())) {
            return response()->json(['status' => true], 200);
        }
    }

    public function create(Request $request, $id)
    {
        return view('admin.product.attribute.create', ['id' => $id]);
    }


    public function show(Request $request, $id)
    {
        $attributes = Product::find($id)->attributes;
        return view('admin.product.attribute.show', [
            'attributes' => $attributes,
        ]);
    }

    public function edit(Request $request, $name, $value, $id)
    {
        return view('admin.product.attribute.edit', [
            'name' => $name,
            'value' => $value,
            'id'    => $id,
        ]);
    }

    public function update(Request $request)
    {
        $attribute = \App\ProductAttribute::find($request->product_id);
        $attribute->attr_name = $request->attr_name;
        $attribute->attr_value = $request->attr_value;
        $attribute->save();
        return redirect()->route('admin.product.index');
    }

    public function delete(Request $request, $id)
    {
        $attribute = \App\ProductAttribute::find($id);
        $attribute->delete();
        return redirect()->back();
    }
}
