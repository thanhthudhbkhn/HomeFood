<?php

use Illuminate\Database\Seeder;

class CategoryImagesTableSeeder extends Seeder
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
                 'category_id' => 1,
                 'link' => '/images/img1.jpg'
             ],
             [
                 'category_id' => 2,
                 'link' => '/images/img2.jpg'
             ],
             [
                 'category_id' => 3,
                 'link' => '/images/img3.jpg'
             ],
             [
                 'category_id' => 4,
                 'link' => '/images/img4.jpg'
             ],
             [
                 'category_id' => 5,
                 'link' => '/images/img5.jpg'
             ]
         ];
         DB::table('category_images')->insert($data);
     }
}
