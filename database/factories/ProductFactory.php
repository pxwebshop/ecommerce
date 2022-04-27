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
            'category_id' => $this->faker->numberBetween(1, 18),
            'thumb' =>   $this->faker->randomElement([
                'https://templates.envytheme.com/ejon/default/assets/img/arrivals-products/arrivals-products-1.jpg',
                'https://templates.envytheme.com/ejon/default/assets/img/arrivals-products/arrivals-products-2.jpg',
                'https://templates.envytheme.com/ejon/default/assets/img/arrivals-products/arrivals-products-3.jpg',        
                'https://templates.envytheme.com/ejon/default/assets/img/arrivals-products/arrivals-products-4.jpg',        
                'https://templates.envytheme.com/ejon/default/assets/img/bestsellers-products/bestsellers-products-1.jpg',               
                'https://templates.envytheme.com/ejon/default/assets/img/bestsellers-products/bestsellers-products-2.jpg',               
                'https://templates.envytheme.com/ejon/default/assets/img/bestsellers-products/bestsellers-products-3.jpg',               
                'https://templates.envytheme.com/ejon/default/assets/img/bestsellers-products/bestsellers-products-4.jpg',               
                'https://templates.envytheme.com/ejon/default/assets/img/bestsellers-products/bestsellers-products-5.jpg',               
                'https://templates.envytheme.com/ejon/default/assets/img/bestsellers-products/bestsellers-products-6.jpg',               
            ]),
            'import_price' => $this->faker->numberBetween(80000000, 100000000),
            'price' => $this->faker->numberBetween(80000000, 100000000),
            'sale_price' => $this->faker->numberBetween(60000000, 90000000),
            'quantity' => $this->faker->numberBetween(1000, 9000),
            'special_offer' => $this->faker->numberBetween(0, 1),
            'special_product' => $this->faker->numberBetween(0, 1),
            'active' => 1,
        ];
    }
}
