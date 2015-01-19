<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {

		Schema::create('customers', function(Blueprint $table) {

			$table->increments('id');
			$table->string('ssn')->nullable();
			$table->string('name');
			$table->string('address')->nullable();
			$table->string('telephone');
			$table->string('email')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		
		Schema::drop('customers');
	}

}
