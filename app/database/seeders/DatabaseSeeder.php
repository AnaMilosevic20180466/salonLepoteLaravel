<?php

namespace Database\Seeders;

use App\Models\Kozmeticar;
use App\Models\Termin;
use App\Models\Tretman;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

         User::truncate();
        Kozmeticar::truncate();
        Termin::truncate();
        Tretman::truncate();

        \App\Models\User::factory(10)->create();
        $ks = new KozmeticarSeeder();
        $ks->run();

      

        $trs = new TretmanSeeder();
        $trs->run();

        $tes = new TerminSeeder();
        $tes->run();

    }
}
