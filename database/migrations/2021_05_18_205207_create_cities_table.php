<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table-> enum('location', ['CABA',
             'CABA',
             'GBA ZONA NORTE',
             'GBA ZONA SUR',
             'GBA ZONA ESTE',
             'GBA ZONA OESTE',
             'LA PLATA',
             'ZARATE-CAMPANA'
             ]);
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
        Schema::dropIfExists('cities');
    }
}
