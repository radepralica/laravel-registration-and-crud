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
        return view('products.main',['products'=>$products]);
    }

 public function store(ProductRequest $request)
        {
            Product::create($request->validated());
            return redirect(route('user.main'));
        }

  public function edit (Product $product)
    {
      if(!auth()->check()){
        return redirect('/home');
      }
      return view('products.edit',['product'=>$product]);
    }

  public function update (Product $product,ProductRequest $request)
    {
        $product->update($request->validated());
      return redirect('/main');
    }

 public function destroy (Product $product)
    {
       $product->delete();
        return redirect(route('product.main'));
    }


}
