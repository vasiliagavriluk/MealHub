<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [];
        $faker = fake('ru_RU');
        $users[] =
            [
                'lastname'    => $faker->lastName(),
                'firstname'  => $faker->firstName(),
                'ward_id'=> '10',
            ];

        for ($i = 2; $i < 11; $i++)
        {
            $ward_id = $i-1;
            $users[] =
                [
                    'lastname'    => $faker->lastName(),
                    'firstname'  => $faker->firstName(),
                    'ward_id'=> $ward_id,
                ];
        }

        DB::table('user')->insert($users);
    }
}
