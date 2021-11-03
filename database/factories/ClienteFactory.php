<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_completo' => $this->faker->name(),
            'numero_identidad' => $this->faker->numberBetween(0,1).$this->faker->numberBetween(0,8)
                .$this->faker->numberBetween(0,2).$this->faker->numberBetween(0,8).'-'
                .$this->faker->numberBetween(1960,2004)
                .$this->faker->numerify('-#####'),
            'fecha_nacimiento' => $this->faker->date($format = 'Y-m-d', $max = '2005-01-01'),
            'direccion' => $this->faker->address(),
            'sexo' => $this->faker->randomElement($array = array ('f','m')),
        ];
    }
}
