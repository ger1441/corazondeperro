<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animalitos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->enum('especie',['Perro','Gato'])->default('Perro');
            $table->enum('sexo',['Macho','Hembra'])->default('Macho');
            $table->enum('edad',['3-5 meses','6-11 meses','1-2 años','3-4 años','5+ años'])->default('1-2 años');
            $table->enum('talla',['N/A','Chica','Mediana','Grande'])->default('N/A');
            $table->text('description')->nullable();
            $table->string('foto',100)->nullable();
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
        Schema::dropIfExists('animalitos');
    }
}
