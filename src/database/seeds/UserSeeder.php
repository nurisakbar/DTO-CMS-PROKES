<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      =>  'Administrator',
            'email'     =>  'DTOadmin2001!@gmail.com',
            'password'  =>  Hash::make('DTOadmin2001!')
            ]);
    }
}
