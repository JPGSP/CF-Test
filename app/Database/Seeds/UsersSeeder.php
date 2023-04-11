<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create('id_ID');
        for ($i=0; $i < 10; $i++) {
            $data = [
                'firstname'=> $faker->firstName,
                'lastname' => $faker->lastName,
                'email'    => $faker->email,
                'password' => $faker->password,
                'mobile'   => $faker->phoneNumber,
                'username' => $faker->userName,
            ];
            $this->db->table('users')->insert($data);
        }
    }
}
