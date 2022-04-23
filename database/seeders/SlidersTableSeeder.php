<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Slider::truncate();

        $sliders =  [
            [
                'title' => 'Get The Best Deal on Smart TV',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'url' => '#',
                'image' => 'https://templates.envytheme.com/ejon/default/assets/img/main-slider/monitor.png',
                'sort' => '1',
                'active' => '1',
            ],
            [
                'title' => 'The Drone has an Attractive Gift Free',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'url' => '#',
                'image' => 'https://templates.envytheme.com/ejon/default/assets/img/main-slider/drone.png',
                'sort' => '2',
                'active' => '1',
            ],
            [
                'title' => 'The High-Quality Product is Ready',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'url' => '#',
                'image' => 'https://templates.envytheme.com/ejon/default/assets/img/main-slider/headphone.png',
                'sort' => '3',
                'active' => '1',
            ],
        ];

        Slider::insert($sliders);
    }
}
