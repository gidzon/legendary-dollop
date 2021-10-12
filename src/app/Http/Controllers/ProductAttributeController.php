<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductAttributeController extends Controller
{
    public function __invoke(Request $request)
    {
        dd($request->has('price'));
    }
}
