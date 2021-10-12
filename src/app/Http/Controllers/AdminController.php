<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $productsCount = Product::count();
        $categoriesCount = Category::count();
        return view('admin.index', [
            'productsCount' => $productsCount,
            'categoriesCount' => $categoriesCount,
        ]);
    }
}
