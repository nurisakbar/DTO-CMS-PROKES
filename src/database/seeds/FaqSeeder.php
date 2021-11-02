<?php

use Illuminate\Database\Seeder;
use App\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Faq::class, 20)->create();
    }
}
