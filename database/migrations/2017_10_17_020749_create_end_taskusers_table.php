<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEndTaskusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('end_taskusers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titleTask');
            $table->text('descriptionTask');
            $table->dateTime('startTask');
            $table->dateTime('endTask');
            $table->dateTime('endTaskuser')->nullable();
            $table->decimal('endTasklatitude', 10, 7)->nullable(); 
            $table->decimal('endTasklongitude', 10, 7)->nullable(); 
            $table->integer('statusTask');
            $table->integer('idUser')->unsigned(); 
            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');
            $table->integer('idTask')->unsigned(); 
            $table->foreign('idTask')->references('id')->on('tasks')->onDelete('cascade');
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
        Schema::dropIfExists('end_taskusers');
    }
}
