<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalitosHistoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animalitos_historia', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_animalito')->unsigned();
            $table->foreign('id_animalito')->references('id')->on('animalitos')->onDelete('cascade');
            $table->longText('historia');
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
        Schema::dropIfExists('animalitos_historia');
    }
}
