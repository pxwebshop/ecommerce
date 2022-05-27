<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::truncate();

        $categories =  [
            [
                'name' => 'Gaming',
                'parent_id' => '0',
                'description' => 'Laptop gaming',
                'active' => '1',
            ],
            [
                'name' => 'Macbook',
                'parent_id' => '0',
                'description' => 'Apple macbook',
                'active' => '1',
            ],
            [
                'name' => 'Office',
                'parent_id' => '0',
                'description' => 'Laptop office',
                'active' => '1',
            ],
            [
                'name' => 'Graphics',
                'parent_id' => '0',
                'description' => 'Laptop graphics',
                'active' => '1',
            ],
            [
                'name' => 'Luxury',
                'parent_id' => '0',
                'description' => 'Laptop luxury',
                'active' => '1',
            ],
            [
                'name' => 'Asus',
                'parent_id' => '1',
                'description' => 'Laptop asus',
                'active' => '1',
            ],
            [
                'name' => 'Hp',
                'parent_id' => '1',
                'description' => 'Laptop hp',
                'active' => '1',
            ],
            [
                'name' => 'Lenovo',
                'parent_id' => '1',
                'description' => 'Laptop lenovo',
                'active' => '1',
            ],
            [
                'name' => 'Acer',
                'parent_id' => '1',
                'description' => 'Laptop acer',
                'active' => '1',
            ],
            [
                'name' => 'Dell',
                'parent_id' => '1',
                'description' => 'Laptop dell',
                'active' => '1',
            ],
            [
                'name' => 'MSI',
                'parent_id' => '1',
                'description' => 'Laptop msi',
                'active' => '1',
            ],
            [
                'name' => 'Surface',
                'parent_id' => '1',
                'description' => 'Laptop surface',
                'active' => '1',
            ],
            [
                'name' => 'LG',
                'parent_id' => '1',
                'description' => 'Laptop LG',
                'active' => '1',
            ],
            [
                'name' => 'Gigabyte',
                'parent_id' => '1',
                'description' => 'Laptop gigabyte',
                'active' => '1',
            ],
            [
                'name' => 'Air M1',
                'parent_id' => '2',
                'description' => 'Macbook air m1',
                'active' => '1',
            ],
            [
                'name' => 'Pro 13 inch',
                'parent_id' => '2',
                'description' => 'Laptop gaming',
                'active' => '1',
            ],
            [
                'name' => 'Pro 14 inch',
                'parent_id' => '2',
                'description' => 'Macbook pro 14 inch',
                'active' => '1',
            ],
            [
                'name' => 'Pro 16 inch',
                'parent_id' => '2',
                'description' => 'Macbook pro 14 inch',
                'active' => '1',
            ],
        ];

        Category::insert($categories);
    }
}
