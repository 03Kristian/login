<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sitio;

class SitioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            array('municipio' => 'Popayan'),
            array('municipio' => 'Timbio'),
            array('municipio' => 'Bolivar'),
            array('municipio' => 'Bordo'),
            array('municipio' => 'Pasto'),
           
            

        ];

        Sitio::insert($data);
    }
}
