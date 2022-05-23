<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

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
                'title' => 'The Drone has an Attractive Gift Free',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'url' => '#',
                // 'image' => 'https://templates.envytheme.com/ejon/default/assets/img/main-slider/drone.png',
                'image' => 'https://fptshop.com.vn/landing-laptop-gaming/Content/Desktop/images/product-banner2.png?v=202205240224',   
                'sort' => '1',
                'active' => '1',
            ],
            [
                'title' => 'The High-Quality Product is Ready',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'url' => '#',
                'image' => 'https://i.dell.com/is/image/DellContent/content/dam/ss2/page-specific/dell-homepage/apj/modules/show-sb-dell-precision-5770nt-uhp-au-homepage-module-lf-1023x842.png?fmt=png-alpha&wid=1023&hei=842',     
                // 'image' => 'https://templates.envytheme.com/ejon/default/assets/img/main-slider/headphone.png',
                'sort' => '2',
                'active' => '1',
            ],
            [
                'title' => 'Get The Best Deal on Smart TV',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'url' => '#',
                'image' => 'https://i.dell.com/is/image/DellContent/content/dam/ss2/page-specific/dell-homepage/en/modules/g-series-mlk-cons-dell-5520nt-uhp-my-homepage-module-rf-1023x842.png?fmt=png-alpha&wid=1023&hei=842',    
                //'image' => 'https://templates.envytheme.com/ejon/default/assets/img/main-slider/monitor.png',
                'sort' => '3',
                'active' => '1',
            ],
        ];
       
        Slider::insert($sliders);
    }
}
