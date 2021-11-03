<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo_producto' => $this->faker->randomElement($array = array ('A','N', 'R', 'L')).$this->faker->numerify('-###'),
            'nombre_producto' => $this->faker->randomElement($array = array ('Arroz','Jabón', 'Azúcar', 'Aceite', 'Consomé')),
            'precio_compra' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 15),
            'precio_venta' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 16, $max = 20),
            'descripcion' => $this->faker->text($maxNbChars = 40),

        ];
    }
}
