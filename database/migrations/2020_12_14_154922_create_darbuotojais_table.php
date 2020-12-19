<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint\increment;

class CreateDarbuotojaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('darbuotojais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pavadinimas');
            $table->bigInteger('kaina');
            $table->string('apie', 5000);          
            $table->string('image');
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
        Schema::dropIfExists('darbuotojais');
    }
}
