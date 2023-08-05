<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Device extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device', function (Blueprint $table) {

            $table->bigIncrements('Dev_Id');
            $table->string('Dev_Parcode');
            $table->string('Dev_Name');
            $table->integer('Dev_Cat');
            $table->integer('Dev_User');
            $table->integer('Dev_Unit');
            $table->integer('Dev_Problem');
            $table->string('Dev_Pic');
            $table->string('Dev_Status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devices');
    }
}
