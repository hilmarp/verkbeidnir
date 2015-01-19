<?php

class StatusTableSeeder extends Seeder {

	public function run() {

		Status::create([
			'status' => 'Í vinnslu'
		]);

		Status::create([
			'status' => 'Tilbúið til afhendingar'
		]);

		Status::create([
			'status' => 'Afhent'
		]);
	}

}