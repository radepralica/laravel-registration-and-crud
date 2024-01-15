<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    public function create()
    {
        return view('products.create');

    }
    public function main ()
    {
        $products=Product::all();
        return view('main',['products'=>$products]);
    }


 public function store(ProductRequest $request)
        {
            Product::create($request->validated());
            return redirect(route('user.main'));
        }


}
