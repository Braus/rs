<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealEstateReview extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('realestatereview', function(Blueprint $table){
			$table->increments('id');
			$table->integer('propertyId');
			$table->integer('userId');
			$table->date('reviewDate');
			$table->date('contractStart');
			$table->date('contractEnd');
			$table->string('realEstate');
			$table->double('cost');
			$table->text('comment');
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
		Schema::drop('realestatereview');
	}

}
