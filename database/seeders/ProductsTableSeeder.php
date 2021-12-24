<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert(
            [
                [
                    'name' => 'Cima',
                    'description' => 'The charm of this car. Choose CIMA. It is the pride and pleasure of choosing one vertex.',
                    'price' => rand(1000000, 100000000),
                    'category_id' => 1,
                    'photo' => 'images/cars/cima_1912_top_01.jpg.ximg.l_full_m.smart.jpg',
                ],
                [
                    'name' => 'Fuga',
                    'description' => 'The Infiniti brand is highly regarded for its advanced design and powerful performance in each of its markets, including the U.S., Canada, Europe, Russia, the Middle East, China and Korea. With its highly refined style and responsiveness, Infiniti promises a driving experience with unparalleled appeal.',
                    'price' => rand(1000000, 100000000),
                    'category_id' => 2,
                    'photo' => 'images/cars/fuga_1912_top_02 . jpg . ximg . l_full_m . smart . jpg',
                ],
                [
                    'name' => 'Skyline',
                    'description' => 'Datsun will provide an appealing and sustainable motoring experience to optimistic up-and-coming customers in high-growth markets. Datsun combines Nissan Motor\'s 80 years of Japanese car-making expertise with the nearly century-old Datsun Brand DNA. Datsun vehicles will be Local Products ensured by a Global Brand, and starts sales in India, Indonesia, Russia and South Africa from 2014.',
                    'price' => rand(1000000, 100000000),
                    'category_id' => 2,
                    'photo' => 'images/cars/sylphy_1803_top_002.jpg.ximg.l_full_m.smart.jpg',
                ],
            ]
        );
    }
}
