<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->safeEmail,
                'password' => $faker->password,
                'dob'=>$faker->date($format = 'Y-m-d', $max = 'now'),
                'address'=>$faker->address,
                'phone'=>$faker->e164PhoneNumber 
            ]);
        }
    }
}
