<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CustomersTableSeeder extends Seeder {

	public function run() {

		$faker = Faker::create();

		foreach(range(1, 5) as $index) {
			
			Customer::create([
				'ssn' => $faker->randomNumber(10),
				'name' => $faker->name,
				'address' => $faker->address,
				'telephone' => $faker->randomNumber(7),
				'email' => $faker->email
			]);
		}
	}

}