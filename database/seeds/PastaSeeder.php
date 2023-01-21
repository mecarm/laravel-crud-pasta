<?php

use App\Models\Pasta;
use Illuminate\Database\Seeder;

class PastaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_pasta = config('pasta');

        foreach( $array_pasta as $elem){
            $new_pasta = new Pasta();
            $new_pasta->title = $elem['titolo'];
            $new_pasta->description = $elem['descrizione'];
            $new_pasta->type = $elem['tipo'];
            $new_pasta->cooking_time = $elem['cottura'];
            $new_pasta->image = $elem['src'];
            $new_pasta->weight = $elem['peso'];
            $new_pasta->save();
        }
        ;
    }
}
