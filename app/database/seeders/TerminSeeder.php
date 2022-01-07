<?php

namespace Database\Seeders;

use App\Models\Termin;
use Illuminate\Database\Seeder;

class TerminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Termin::factory(10)->create();
    }
}
