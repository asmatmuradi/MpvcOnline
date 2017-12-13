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
    ['KLASLINE', 4504, '5 Holls 70 mm. System
                        70 mm. Wide Sash Aplication
                        Trio Glass Application','100','3800','Enderpen','http://www.enderpen.com.tr/uploads/k_5o7pv0zoehta50fkfviv.PNG'],
    ['COMPACTLINE', 1504, '5 Holls 70 mm. System
                          70 mm. Wide Sash Aplication
                          Trio Glass Application','200','800','Enderpen','http://www.enderpen.com.tr/uploads/k_5zsmlbnmahpy8lodbee4.PNG'],

    ['MAXILINE', 1800, '4 Holls 62 mm. System
                        70 mm. Wide Sash Aplication
                        Trio Glass Application','20','1000','Enderpen','http://www.enderpen.com.tr/uploads/k_otdhlnj8ty2z5ro23rk2.PNG'],
    ['SUNLINE', 2800, '4 Holls 62 mm. System
                        70 mm. Wide Sash Aplication
                        Trio Glass Application','20','1700','Enderpen','http://www.enderpen.com.tr/uploads/k_vz0ov6pgqbee6makjzu8.PNG'],


];

$count = count($products);

foreach ($products as $key => $product) {
    Product::insert([
        'created_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
        'name' => $product[0],
        'price' => $product[1],
        'description' => $product[2],
        'quantity_Available' => $product[3],
        'cost' => $product[4],
        'vendor' => $product[5],
        'image' => $product[6]
    ]);
    $count--;
}
}
}
