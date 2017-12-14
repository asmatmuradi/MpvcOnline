<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CustomersTableSeeder::class);
        $this->call(SalesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(InventoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(CertficationsTableSeeder::class);
        $this->call(ProductTagTableSeeder::class);
    }
}
