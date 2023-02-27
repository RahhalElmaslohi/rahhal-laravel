<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudients', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->string('adresse',100);
            $table->string('phone',20);
            $table->string('email',50);
            $table->string('naissance',60);
            $table->integer('villeId')->unsigned();
            $table->foreign('villeId')->references('id')->on('villes');
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
        Schema::dropIfExists('etudients');
    }
}
