<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Seeder;
// use App\Models\Perfiljurado;


class JuradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Jurado::factory(50)->create();
        // \App\Models\Perfiljurado::factory(30)->create();
        // $data = [
        //     'identificacion' => 1002476020,
        //     'nombre'=>'Leonardo',
        //     'apellido' => 'Torres',
        //     'email' => 'leo@ejemplo.com',
        // ];

        // DB::table('perfiljurados')->insert($data);
    }
}
