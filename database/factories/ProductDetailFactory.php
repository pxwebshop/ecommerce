<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' =>  Product::inRandomOrder()->first()->id,
            'stock' => $this->faker->numberBetween(0, 1),
            'sku' => $this->faker->text(5),
            'specification' => $this->faker->paragraph,
            'image' => $this->faker->randomElement([
                'https://templates.envytheme.com/ejon/default/assets/img/quick-view/quick-view-1.jpg',
                'https://templates.envytheme.com/ejon/default/assets/img/quick-view/quick-view-2.jpg',
                'https://templates.envytheme.com/ejon/default/assets/img/quick-view/quick-view-3.jpg',                     
            ]),
            'info_delivery' => $this->faker->text(50),
        ];
    }
}
