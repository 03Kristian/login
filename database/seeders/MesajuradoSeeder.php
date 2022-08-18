<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mesajurado;

class MesajuradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            array('sitio_id'=>2,'perfil_id'=>3),
            array('sitio_id'=>4,'perfil_id'=>5),
        ];

        Mesajurado::insert($data);
    }
}
