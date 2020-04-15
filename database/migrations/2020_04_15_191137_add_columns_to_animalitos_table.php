<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToAnimalitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('animalitos', function (Blueprint $table) {
            $table->boolean('adoptado')->default('0');
            $table->boolean('mostrar')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('animalitos', function (Blueprint $table) {
            $table->dropColumn('adoptado');
            $table->dropColumn('mostrar');
        });
    }
}
