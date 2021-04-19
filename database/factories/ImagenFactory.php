<?php

namespace Database\Factories;

use App\Models\imagen;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImagenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = imagen::class;

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
            'url'        => $this->faker-> imageUrl($width = 640, $height = 480),
            'producto_id' => $this->faker->numberBetween(1, Product::count())
        ];
    }
}
