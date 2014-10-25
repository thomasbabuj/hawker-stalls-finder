<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('centres', function(Blueprint $table)
		{
			$table->bigIncrements('id');
            $table->string('name', 255);
            $table->string('small_desc', 255);
            $table->longText('long_desc');
            $table->string('image');
            $table->string('total_nos_stalls');
            $table->string('total_cooked_food_stalls');
            $table->string('total_occupied_food_stalls');
            $table->string('unique_qualities', 255);
            $table->string('longitude');
            $table->string('latitude');
            $table->boolean('status')->default(0);
            $table->softDeletes();
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
		Schema::drop('centres');
	}

}
