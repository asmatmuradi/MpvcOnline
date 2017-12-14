<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Tag;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('name')->get();
        return view('product.show')->with([
            'products' => $products
        ]);
    }

    public function add(Request $request)
    {
      $getForMultipleSelects = Tag::getForMultipleSelects();
      return view('product.add')->with([
        'tags' => $getForMultipleSelects
      ]);
    }
    /**
    * add a product
    */
   public function save(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required|min:0',
            'description' => 'required',
            'quantity' => 'required|min:0',
            'cost' => 'required|min:0',
            'vendor' => 'required',
            'image' => 'url'
        ]);

          $product = new Product();
          $product->name = $request->input('name');
          $product->price = $request->input('price');
          $product->description = $request->input('description');
          $product->quantity_Available = $request->input('quantity');
          $product->cost = $request->input('cost');
          $product->vendor = $request->input('vendor');
          $product->image = $request->input('image');
          $product->save();

          $product->tags()->sync($request->input('tags'));

          $newProduct = $product->orderByDesc('created_at')->get()->take(1);

          return view('product.show')->with([
            'products' => $newProduct,
            'alert' => 'The product below was added successfully:'
          ]);
    }
    /**
    * update a product
    */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required|min:0',
            'description' => 'required',
            'quantity' => 'required|min:0',
            'cost' => 'required|min:0',
            'vendor' => 'required',
            'image' => 'url'
        ]);
          $product = Product::with('tags')->find($id);
          $existingProduct = Product::with('tags')->find($id);
          $product->name = $request->input('name');
          $product->price = $request->input('price');
          $product->description = $request->input('description');
          $product->quantity_Available = $request->input('quantity');
          $product->cost = $request->input('cost');
          $product->vendor = $request->input('vendor');
          $product->image = $request->input('image');

          #check if the product model has been changed
          $isDirty =$product->isDirty();
          $newTags=$request->input('tags');
          $newTags[]=asort($newTags);
          $existingTags=$product->tags->pluck('id')->toArray();
          $existingTags[]=asort($existingTags);
          $result = array_diff($newTags,$existingTags);
          if (empty($result))
          {
              $result = array_diff($existingTags, $newTags);
          }
          $product->save();
          $product->tags()->sync($request->input('tags'));

          if ($isDirty || (!empty($result)))
          {
            $newProduct = $product->orderByDesc('updated_at')->get()->take(1);
            return view('product.show')->with([
              'products' => $newProduct,
              'alert' => 'The product below was edited successfully:'
            ]);
          }
          else
          {
            return redirect('/product/'.$id.'/edit/')
            ->with('alert', 'There were no changes to update this product. Please make the required change and click Save.');
          }
    }
    public function edit($id)
    {
      $product = Product::with('tags')->find($id);

      $tagsForMultipleSelects = Tag::getForMultipleSelects();

      $tagsForThisProduct = [];
      foreach ($product->tags as $tag) {
          $tagsForThisProduct[] = $tag->name;
      }
      return view('product.edit')->with([
          'product' => $product,
          'tags'  => $tagsForMultipleSelects,
          'tagsForThisProduct' => $tagsForThisProduct

        ]);
    }
    /*
    * confirm deletion
    * GET
    * /product/{id}/delete
    */
    public function delete($id)
    {
        $product = Product::find($id);

        if (!$product) {
          $products = Product::orderBy('name')->get();
          return view('product.show')->with([
            'products' => $products,
            'alert' => 'The Product was not found.'
          ]);

        }

        return view('product.delete')->with([
            'product' => $product,
            'previousUrl' => url()->previous() == url()->current() ? '/product' : url()->previous()
        ]);
    }


    /*
    * DELETE
    * /product/{id}/delete
    */
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
          $products = Product::orderBy('name')->get();
          return view('product.show')->with([
            'products' => $products,
            'alert' => 'The Product was not found.'
          ]);
        }

        $product->tags()->detach();

        $product->delete();

        return redirect('/product')->with('alert', $product->name. ' from vendor: '.$product->vendor.' was removed.');
    }

}
