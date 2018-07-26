<?php

use Illuminate\Database\Seeder;

class FoodImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'food_id' => 2,
                'link' => '/images/img2.jpg'
            ],
            [
                'food_id' => 3,
                'link' => '/images/img3.jpg'
            ],
            [
                'food_id' => 4,
                'link' => '/images/img4.jpg'
            ]
        ];
        DB::table('food_images')->insert($data);
    }
}
