<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Certification;

class ProductCertificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products =[
          'COMPACTLINE' => ['ISO9001','TSE2012','ASTM INTERNATIONAL'],
          'KLASLINE' => ['ISO9001','TSE2012']
              ];

        # Now loop through the above array, creating a new pivot for each product to certification
        foreach ($products as $name => $certifications) {
            # First get the book
            $product = Product::where('name', 'like', $name)->first();

            # Now loop through each certifications for this product, adding the pivot
            foreach ($certifications as $certificateName) {
                $cert = Certification::where('name', 'like', $certificateName)->first();

                # Connect this certification to this product
                $product->certifications()->save($cert);
            }
        }
    }
}
