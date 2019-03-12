<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update2Graduates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          Schema::table('graduates', function(Blueprint $table)
        {
            
           
            $table->renameColumn('dategreso','id_egreso');
           
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
