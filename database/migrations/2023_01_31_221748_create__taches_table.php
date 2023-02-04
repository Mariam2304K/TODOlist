<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_taches', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("duree");
            $table->string("jour1");
            $table->date("jour2");
            $table->date("jour3");
            $table->date("jour4");
            $table->date("jour5");
            $table->date("jour6");
            $table->date("jour7");
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
        Schema::dropIfExists('_taches');
    }
}
