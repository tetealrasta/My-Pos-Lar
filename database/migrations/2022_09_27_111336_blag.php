<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Blag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blags',function(Blueprint $table){
            $table->bigIncrements('Blag_ID');
            $table->bigInteger('Blag_Number');
            $table->integer('Dev_Type');
            $table->integer('Type_Of_Error');
            $table->integer('Device_Id');
            $table->integer('Unit_Id');
            // $table->integer('Agent_Id')->nullable();
            $table->integer('Device_Status')->default(0);
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
    Schema::dropIfExists('blags');
    }
}
