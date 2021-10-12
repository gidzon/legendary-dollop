<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Discount\DiscountService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    private $discount;

    public function __construct(DiscountService $discount)
    {
        $this->discount = $discount;
    }

    public function create()
    {
        return view('admin.product.create', ['categories' => Category::get()]);
    }

    public function store(Request $request)
    {
        $imagePath = $request->file('img')->store('product', 'public');
        $dataProduct = $request->except('img');
        $dataProduct['img_path'] = $imagePath;
        Product::create($dataProduct);
        return redirect()->route('admin.product.index');
    }

    public function index()
    {
        
        return view('admin.product.index', ['products' => Product::paginate(5)]);
    }

    public function show(Request $request, $id)
    {
        return view('admin.product.show', ['product' => Product::find($id)]);
    }

    public function delete(Request $request, $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function edit(Request $request, Product $product)
    {
        return view('admin.product.edit')
        ->with('product', $product)
        ->with('categories', Category::get());
    }

    public function update(Request $request)
    {
        $product = Product::find($request->input('product_id'));
        if ($request->hasFile('image')) {
            $product->img_path = $request->file('image')->store('product', 'public');
            
        } if ($request->filled('name')) {
            $product->name = $request->input('name');
        } if ($request->filled('desc')) {
            $product->desc = $request->input('desc');
        } if ($request->filled('latest')) {
            $product->latest = $request->input('latest');
        } if ($request->filled('price')) {
            $price = $request->input('price');
            $product->price = $price;

        } if ($request->filled('discount')) {
            
            $this->discount->setPrice($product->price);
            $this->discount->setDiscount($request->input('discount'));
            $this->discount->count();
            $this->discount->addPrecentDiscount();
            $product->discount = $this->discount->getPrecentDiscount();
            $product->price = $this->discount->getNewPrice();
            $product->old_price = $this->discount->getPrice();
        }
        $product->category_id = $request->category;
        $product->save();
        return redirect()->route('admin.product.index');
        
    }
}
