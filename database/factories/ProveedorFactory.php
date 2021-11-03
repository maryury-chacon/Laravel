<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProveedorFactory extends Factory
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
            'numero_identidad' => $this->faker->numberBetween($min = 0, $max = 1).$this->faker->numberBetween($min = 0, $max = 8)
                .$this->faker->numberBetween(0,2).$this->faker->numberBetween(0,8).'-'
                .$this->faker->numberBetween(1960,2004)
                .$this->faker->numerify('-#####'),
            'fecha_nacimiento' => $this->faker->date($format = 'Y-m-d', $max = '2005-01-01'),
            'direccion' => $this->faker->address(),
            'descripcion' => $this->faker->text($maxNbChars = 40),
            'sexo' => $this->faker->randomElement($array = array ('f','m')),
        ];
    }
}
