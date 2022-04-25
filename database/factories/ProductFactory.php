<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{

    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(20),
            'description' => $this->faker->text(200),
            'category_id' => 1,
            'thumb' =>  'https://templates.envytheme.com/ejon/default/assets/img/arrivals-products/arrivals-products-1.jpg',
            'import_price' => $this->faker->numberBetween(80000000, 100000000),
            'price' => $this->faker->numberBetween(80000000, 100000000),
            'sale_price' => $this->faker->numberBetween(60000000, 90000000),
            'quantity' => $this->faker->numberBetween(1000, 9000),
            'special' => $this->faker->numberBetween(0, 1),
            'active' => 1,
        ];
    }
}
