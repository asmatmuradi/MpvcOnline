<?php

use Illuminate\Database\Seeder;
use App\Certification;

class CertficationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $certfications = ['ISO9001', 'TSE2012', 'ASTM INTERNATIONAL', 'CNBS'];

        foreach ($certfications as $CertficateName) {
            $Certficate = new Certification();
            $Certficate->name = $CertficateName;
            $Certficate->save();
        }
    }
}
