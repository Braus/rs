<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealEstate extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create ('realestate', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('streetNumber');
			$table->integer('unitNumber');
			$table->string('streetName');
			$table->string('streetSufix');
			$table->string('houseType');
			$table->string('suburb');
			$table->integer('postcode');
			$table->string('state');
			$table->date('createUserId');
			$table->date('updateUserId');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('realestate');
	}

}
