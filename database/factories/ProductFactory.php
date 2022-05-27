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
                // 'https://templates.envytheme.com/ejon/default/assets/img/arrivals-products/arrivals-products-1.jpg',
                // 'https://templates.envytheme.com/ejon/default/assets/img/arrivals-products/arrivals-products-2.jpg',
                // 'https://templates.envytheme.com/ejon/default/assets/img/arrivals-products/arrivals-products-3.jpg',        
                // 'https://templates.envytheme.com/ejon/default/assets/img/arrivals-products/arrivals-products-4.jpg',        
                // 'https://templates.envytheme.com/ejon/default/assets/img/bestsellers-products/bestsellers-products-1.jpg',               
                // 'https://templates.envytheme.com/ejon/default/assets/img/bestsellers-products/bestsellers-products-2.jpg',               
                // 'https://templates.envytheme.com/ejon/default/assets/img/bestsellers-products/bestsellers-products-3.jpg',               
                // 'https://templates.envytheme.com/ejon/default/assets/img/bestsellers-products/bestsellers-products-4.jpg',               
                // 'https://templates.envytheme.com/ejon/default/assets/img/bestsellers-products/bestsellers-products-5.jpg',               
                // 'https://templates.envytheme.com/ejon/default/assets/img/bestsellers-products/bestsellers-products-6.jpg',         
                'https://product.hstatic.net/1000026716/product/ki839w_9a51634b01e845fcba8a93aec8b3bbc6_large.png',
                'https://product.hstatic.net/1000026716/product/khung-lt-van-phong_78f660cc6978409a869dbc7a2d8bd250_large.png',
                'https://product.hstatic.net/1000026716/product/laptop-msi-prestige-14-a11sc-203vn_0031006d16f04e428958168e75cc0113_large.jpg',
                'https://product.hstatic.net/1000026716/product/gearvn-laptop-asus-zenbook-flip-ux363ea-hp532t-1_51106e66e8eb49ce81c38f15ab72b5f6_large.jpg',
                'https://product.hstatic.net/1000026716/product/1_79b6ab66ac2047068430616035180e67_large.png',
                'https://product.hstatic.net/1000026716/product/laptop-dell-xps-15-9510-70279030_a12927d21a2e49ae92a29592b4a0b6d7_large.jpg',
                'https://product.hstatic.net/1000026716/product/gearvn-laptop-dell-xps-17-9700-xps7i7001w1-silver-1_2744ab9a2f0749ff8c0b156a41e0443a_large.png',
                'https://product.hstatic.net/1000026716/product/laptop_lg_gram_16z90p-g.ah73a5_cb127f98a9ac4d338e56898ae88ed6e7_large.jpg',
                'https://product.hstatic.net/1000026716/product/gearvn-laptop-lenovo-yoga-slim-7-pro-14ach5-82nk003hvn-1_a448ffa7d57c406fa0387758a9a5465d_large.png',
                'https://product.hstatic.net/1000026716/product/laptop_dell_inspiron_14_5410_p147g002_4e57b2711b8641f2aec6f28dffbc6b74_large.jpg',
                'https://product.hstatic.net/1000026716/product/khung-lt-van-phong_95acddc789d5450d83cab0aed6019a7a_large.png'    
            ]),
            'import_price' => $this->faker->numberBetween(80000000, 100000000),
            'price' => $this->faker->numberBetween(80000000, 100000000),
            'sale_price' => $this->faker->numberBetween(60000000, 90000000),
            'quantity' => $this->faker->numberBetween(1000, 9000),
            'special_offer' => $this->faker->numberBetween(0, 1),
            'special_product' => $this->faker->numberBetween(0, 1),
            'active' => 1,
            'sku' => $this->faker->text(5),
            'specification' => $this->faker->paragraph,
            'images' => $this->faker->randomElement([
                'https://product.hstatic.net/1000026716/product/2_138cec9f984944fba392fc68f94bed91.png',
                'https://product.hstatic.net/1000026716/product/5_d5d6750f4cfc4348a58db72a16f9b4a5.png',
                'https://product.hstatic.net/1000026716/product/4_1b0a899b47a24b1b87ba196015853ba3.png',                     
            ]),
            'info_delivery' => $this->faker->text(50),
        ];
    }
}
