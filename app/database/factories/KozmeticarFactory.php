<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KozmeticarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime_prezime' => $this->faker->name,
            'email' => $this->faker->email,
            'broj_telefona' => $this->faker->phoneNumber(),
            'nivo_strucne_spreme' => $this->faker->randomElement($array = array ('1. nivo SSS','2. nivo SSS','3. nivo SSS','4. nivo SSS','5. nivo SSS','6. nivo SSS')),
            'godine_iskustva' =>  $this->faker->numberBetween($min =0, $max = 40)




        ];
    }
}
