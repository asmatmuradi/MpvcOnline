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

        # Get from DB
        # $newBooks = Book::orderByDesc('created_at')->limit(3)->get();

        # Get from collection
        #$newBooks = $books->sortByDesc('created_at')->take(3);

        return view('store.product')->with([
            'products' => $products
            #'newBooks' => $newBooks,
        ]);
    }
}
