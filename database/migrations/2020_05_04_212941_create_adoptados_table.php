<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdoptadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adoptados', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('foto_antes');
            $table->string('foto_despues');
            $table->longText('historia');
            $table->longText('video')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adoptados');
    }
}
