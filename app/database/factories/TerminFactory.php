<?php

namespace Database\Factories;

use App\Models\Kozmeticar;
use App\Models\Tretman;
use Illuminate\Database\Eloquent\Factories\Factory;

class TerminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'adresaLokala'=>$this->faker->address(),
            
            'vreme' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'kozmeticar_id'=>Kozmeticar::find(random_int(1,Kozmeticar::count())),
            'tretman_id'=> Tretman::find(random_int(1,Tretman::count()))
           
        ];
    }
}
