<?php

namespace Database\Seeders;

use App\Models\Kozmeticar;
use Illuminate\Database\Seeder;

class KozmeticarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kozmeticar::factory(10)->create();
    }
}
