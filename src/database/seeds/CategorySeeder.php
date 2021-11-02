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
            ['category'=>'PCR Dan Antigen','slug'=>'pcr-antigen','icon'=>'icon.png'],
            ['category'=>'PeduliLindungi','slug'=>'pedululindungi','icon'=>'icon.png'],
            ['category'=>'Prokes Umum','slug'=>'prokes-umum','icon'=>'icon.png'],
            ['category'=>'Vaksin','slug'=>'vaksin','icon'=>'icon.png'],
            ['category'=>'Kasus Covid','slug'=>'kasus-covid','icon'=>'icon.png'],
            ['category'=>'Siranap','slug'=>'siranap','icon'=>'icon.png']
        ];

        Category::insert($categories);
    }
}
