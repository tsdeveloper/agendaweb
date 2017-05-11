<?php

use Illuminate\Database\Seeder;
use AgendaWeb\Models\Categoria;
use AgendaWeb\Models\Participante;
class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Categoria::class,10)->create();
        //
        // factory(Categoria::class,10)->create()->each(function ($p)
        // {
        // for($i=0; $i<=5; $i++){
        //    $p->participantes()->save(factory(Participante::class)->make());    
        // }

        
        // });
    }
}
