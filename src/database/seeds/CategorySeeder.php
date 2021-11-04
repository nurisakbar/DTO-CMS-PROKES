<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['category' => 'Kantor/Pabrik', 'slug' => 'kantor-pabrik', 'icon' => 'ic_round-home-work.png'],
            ['category' => 'Perdagangan', 'slug' => 'perdagangan', 'icon' => 'entypo_shop.png'],
            ['category' => 'Tempat Wisata', 'slug' => 'tempat-wisata', 'icon' => 'tabler_building-carousel.png'],
            ['category' => 'Tempat Pendidikan', 'slug' => 'tempat-pendidikan', 'icon' => 'ic_round-school.png'],
            ['category' => 'Tempat Ibadah', 'slug' => 'tempat-ibadah', 'icon' => 'ic_baseline-mosque.png'],
            ['category' => 'Transportasi', 'slug' => 'transportasi', 'icon' => 'fluent_airplane-24-filled.png']
        ];

        Category::insert($categories);
    }
}
