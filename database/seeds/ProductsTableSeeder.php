<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $products = [
    ['PvcPipe', 4504, 'used for concrete houses'],
    ['thinPipe', 3590, 'used for conexes'],
    ['joints',  101, 'used for joining the pipes']
];

$count = count($products);

foreach ($products as $key => $product) {
    Product::insert([
        'created_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
        'name' => $product[0],
        'price' => $product[1],
        'description' => $product[2]
    ]);
    $count--;
}
}
}
