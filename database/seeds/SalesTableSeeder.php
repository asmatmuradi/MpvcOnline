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
      [1],
      [2],
      [3]

  ];

  $count = count($sales);

  foreach ($sales as $key => $sale) {
      Sale::insert([
          'created_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
          'product_Id' => $sale[0]

      ]);
      $count--;
  }
    }
}
