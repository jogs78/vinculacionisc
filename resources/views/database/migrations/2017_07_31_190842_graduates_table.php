<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GraduatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('last_name');
			$table->string('curp');
			$table->string('sex');
			$table->date('birthday');
			$table->string('dategreso');
			$table->string('address');
			$table->string('phone');
			$table->integer('user_id')->unsigned()->foreign('user_id')->references('id')->on('users');
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
        Schema::table('graduates_table', function (Blueprint $table) {
            //
        });
    }
}
