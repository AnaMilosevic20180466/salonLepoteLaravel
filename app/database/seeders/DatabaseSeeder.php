<?php

namespace Database\Seeders;

use App\Models\Kozmeticar;
use App\Models\Termin;
use App\Models\Tretman;
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
        // \App\Models\User::factory(10)->create();

        Kozmeticar::truncate();
        Termin::truncate();
        Tretman::truncate();

        $ks = new KozmeticarSeeder();
        $ks->run();

      

        $trs = new TretmanSeeder();
        $trs->run();

        $tes = new TerminSeeder();
        $tes->run();

    }
}
