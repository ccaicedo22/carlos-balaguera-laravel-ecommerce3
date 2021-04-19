<?php

namespace Database\Factories;

use App\Models\producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'nombre'       => $faker_mbezhanov->productName,
            'descripcion'=> $this->faker->realText($maxNbChars = 30, $indexSize = 2),
            'precio'      => $this->faker->numberBetween($min = 40000, $max = 900000),
            'puntuacion'      => $this->faker->numberBetween($min = 1, $max=5),
            'disponibilidad'  => $this->faker->numberBetween($min = 0, $max=1),
        ];
    }
}
