<?php

use Illuminate\Database\Seeder;
use App\Inventory;

class InventoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inventories = [
      [1,100],
      [2,200],
      [3,400]

  ];

        $count = count($inventories);

        foreach ($inventories as $key => $inventory) {
            Inventory::insert([
          'created_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
          'product_Id' => $inventory[0],
          'quantity_On_Hand' => $inventory[0]

      ]);
            $count--;
        }
    }
}
