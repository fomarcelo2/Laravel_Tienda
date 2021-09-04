<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'cost' => random_int(100,10000),//crea entero aleatorio entre 100 y 10000
            'price' => random_int(1000,20000),//crea entero aleatorio entre 1000 y 20000
            'quantity' => random_int(1,50),//crea entero aleatorio entre 1 y 50
            'brand_id' => random_int(1,10),
            'category_id' => random_int(1,10)
            
        ];
    }
}
