<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
  /*  public function index(Request $request)
    {
        return view('welcome.index');
    }
    */
    public function index()
    {
        $products = Product::orderBy('name')->get();

        return view('store.product')->with([
            'products' => $products
        ]);
    }
    /**
    * add a product
    */
    public function add(Request $request)
    {
      #dump($request);

      if ($request->input('name'))
      {
/*
        $this->validate($request, [
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'description' => 'required',
            'quantity' => 'required|numeric',
            'cost' => 'required',
            'vendor' => 'required',
            'image' => 'url'
        ]);
*/
        $product = Product::find('name');
        if ($product){
            return view('store.addProduct');
        }
        elseif (!$product) {
          $product = new Product();
          $product->name = $request->input('name');
          $product->price = $request->input('price');
          $product->description = $request->input('description');
          $product->quantity_Available = $request->input('quantity');
          $product->cost = $request->input('cost');
          $product->vendor = $request->input('vendor');
          $product->image = $request->input('image');
          $product->save();

          return view('store.addProduct');

        }
      }
        else {
          return view('store.addProduct');
        }

    }
}
