<?php

class UsersTableSeeder extends Seeder {

	public function run() {

		User::create([
			'name' => 'Hilmar',
			'email' => 'hilmar@eht.is',
			'password' => Hash::make('secret')
		]);

		User::create([
			'name' => 'Elvar',
			'email' => 'elvar@eht.is',
			'password' => Hash::make('secret')
		]);
	}

}