<?php

namespace Database\Seeders;

use App\Models\Tretman;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;
 
class TretmanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        $t1 = new Tretman();
        $t1->naziv="Masaza";
        $t1->opis="Lorem, ipsum dolor sit amet con ";
        $t1->cena=2999;
        $t1->save();

        $t2 = new Tretman();
        $t2->naziv="Higijenski tretman lica";
        $t2->opis="Lorem, ipsum dolor sit amet con ";
        $t2->cena=4000;
        $t2->save();


        $t3 = new Tretman();
        $t3->naziv="Sportska masaza";
        $t3->opis="Lorem, ipsum dolor sit amet con ";
        $t3->cena=6999;
        $t3->save();



    }
}
