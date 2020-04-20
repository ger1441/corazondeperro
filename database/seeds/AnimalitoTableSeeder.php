<?php

use Illuminate\Database\Seeder;
use App\Animalito;

class AnimalitoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=10000;$i++){
            DB::table('animalitos')->insert([
                'nombre' => 'Animalito'.$i,
                'foto' => 'foto'.$i,
            ]);
        }
    }
}
