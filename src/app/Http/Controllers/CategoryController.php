<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        $category = Category::find($id);
        $products = $category->products;
        return view('product.index', compact('category', 'products'));
    }
}
