<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = [
      ['John', 'Frank', 2484864504, 1000],
      ['Fatima', 'Malik', 9714063590, 400],
      ['Joe', 'Smith', 9173440101, 50000]

  ];

        $count = count($customers);

        foreach ($customers as $key => $customer) {
            Customer::insert([
          'created_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
          'first_Name' => $customer[0],
          'last_Name' => $customer[1],
          'phone_number' => $customer[2],
          'balance' => $customer[3]
      ]);
            $count--;
        }
    }
}
