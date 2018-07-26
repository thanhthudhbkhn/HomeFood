<?php
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
                'name' => 'user test',
                'password' => bcrypt('123456'),
                'email' => 'admin@gmail.com',
                'avatar' => '/images/avatar/img1.jpg',
                'address' =>
                    'Trường Đại học Ngoại thương, 91 Chùa Láng, Đống Đa, Hà Nội, Việt Nam',
                'phone' => str_random(11),
                'ident' => false,
                'certificate' => null,
                'description' => 'this is user test',
                'latitude' => 21.023038,
                'longitude' => 105.803243
            ],
            [
                'name' => str_random(10),
                'password' => bcrypt('123456'),
                'email' => 'test1@gmail.com',
                'avatar' => '/images/avatar/img1.jpg',
                'address' =>
                    'Trường Đại học Ngoại thương, 91 Chùa Láng, Đống Đa, Hà Nội, Việt Nam',
                'phone' => str_random(11),
                'ident' => false,
                'certificate' => null,
                'description' =>
                    'The International Battle Pass is here to tap into the heart of the Dota summer season. Packed full of exclusive features and rewards, the Battle Pass is sure to unearth a hoard of treasures for your stash as we approach the culmination of this year\'s Dota Pro Circuit and the climactic showdown in Vancouver. 25% of all Battle Pass sales go directly to The International 2018 prize pool.',
                'latitude' => 21.023038,
                'longitude' => 105.803243
            ],
            [
                'name' => str_random(10),
                'password' => bcrypt('123456'),
                'email' => 'test2@gmail.com',
                'avatar' => '/images/avatar/img1.jpg',
                'address' =>
                    'Trường Đại học Ngoại thương, 91 Chùa Láng, Đống Đa, Hà Nội, Việt Nam',
                'phone' => str_random(11),
                'ident' => true,
                'certificate' => '/images/certificate/img1.jpg',
                'description' =>
                    'The International Battle Pass is here to tap into the heart of the Dota summer season. Packed full of exclusive features and rewards, the Battle Pass is sure to unearth a hoard of treasures for your stash as we approach the culmination of this year\'s Dota Pro Circuit and the climactic showdown in Vancouver. 25% of all Battle Pass sales go directly to The International 2018 prize pool.',
                'latitude' => 21.023038,
                'longitude' => 105.803243
            ],
            [
                'name' => str_random(10),
                'password' => bcrypt('123456'),
                'email' => 'test3@gmail.com',
                'avatar' => '/images/avatar/img1.jpg',
                'address' =>
                    'Trường Đại học Ngoại thương, 91 Chùa Láng, Đống Đa, Hà Nội, Việt Nam',
                'phone' => str_random(11),
                'ident' => true,
                'certificate' => '/images/certificate/img1.jpg',
                'description' =>
                    'The International Battle Pass is here to tap into the heart of the Dota summer season. Packed full of exclusive features and rewards, the Battle Pass is sure to unearth a hoard of treasures for your stash as we approach the culmination of this year\'s Dota Pro Circuit and the climactic showdown in Vancouver. 25% of all Battle Pass sales go directly to The International 2018 prize pool.',
                'latitude' => 21.023038,
                'longitude' => 105.803243
            ]
        ];
        DB::table('users')->insert($data);
    }
}
