<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStartTaskusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('start_taskusers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titleTask');
            $table->text('descriptionTask');
            $table->dateTime('startTask');
            $table->dateTime('endTask');
            $table->dateTime('startTaskuser')->nullable(); 
            $table->decimal('startTasklatitude', 10, 7)->nullable(); 
            $table->decimal('startTasklongitude', 10, 7)->nullable(); 
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
        Schema::dropIfExists('start_taskusers');
    }
}
