<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Kaio2',
            'email' => 'kaio.webdesigner@gmail.com',
            'password'=> 'kaio2',
        ]);
    }
}
