<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Product;

class ProductTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $products =[
          'COMPACTLINE' => ['pvc','window','doors','profile'],
          'KLASLINE' => ['pvc','doors','aluminum','panel']
              ];

      # Now loop through the above array, creating a new pivot for each product to tag
      foreach ($products as $name => $tags) {
          # First get the book
          $product = Product::where('name', 'like', $name)->first();

          # Now loop through each tag for this product, adding the pivot
          foreach ($tags as $tagName) {
              $tag = Tag::where('name', 'like', $tagName)->first();

              # Connect this tag to this product
              $product->tags()->save($tag);
          }
      }
    }
}
