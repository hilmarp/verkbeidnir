<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {

		Schema::create('works', function(Blueprint $table) {

			$table->increments('id');
			$table->integer('customer_id')->unsigned();
			$table->integer('status_id')->unsigned();
			$table->string('type');
			$table->text('description');
			$table->string('password')->nullable();
			$table->text('solution')->nullable();
			$table->decimal('price', 8, 0)->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		
		Schema::drop('works');
	}

}
