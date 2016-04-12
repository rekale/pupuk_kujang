<?php

use Illuminate\Database\Seeder;
use App\Domain\Users\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        User::create([
            'name' => 'admin',
            'email' => 'admin@web.com',
            'password' => bcrypt('admin'),
            'remember_token' => bcrypt(str_random(10)),
        ]);

    }
}
