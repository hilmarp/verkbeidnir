<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class WorksTableSeeder extends Seeder {

	public function run() {

		$faker = Faker::create();

		foreach(range(1, 10) as $index) {
			
			Work::create([
				'customer_id' => $faker->numberBetween(1, 5),
				'status_id' => $faker->numberBetween(1, 3),
				'type' => $faker->word,
				'description' => $faker->text(150),
				'password' => $faker->word,
				'solution' => $faker->text(150),
				'price' => $faker->randomNumber(4)
			]);
		}
	}

}