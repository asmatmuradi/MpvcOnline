<?php

use Illuminate\Database\Seeder;
use App\Sale;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $sales = [
      [1,2,8,25],
      [2,3,5,12],
      [3,4,10,20]

  ];

  $count = count($sales);

  foreach ($sales as $key => $sale) {
      Sale::insert([
          'created_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
          'customer_Id'=> $sale[0],
          'product_Id' => $sale[1],
          'discount_Allowance' => $sale[2],
          'quantity_Sold' => $sale[2]


      ]);
      $count--;
  }
    }
}
