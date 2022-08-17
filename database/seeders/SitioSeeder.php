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
            array('departamento' => 'Amazonas'),
            array('departamento' => 'Antioquia'),
            array('departamento' => 'Arauca'),
            array('departamento' => 'Atlántico'),
            array('departamento' => 'Bogotá'),
            array('departamento' => 'Bolívar'),
            array('departamento' => 'Boyacá'),
            array('departamento' => 'Caldas'),
            array('departamento' => 'Caquetá'),
            array('departamento' => 'Casanare'),
            array('departamento' => 'Cauca'),
            array('departamento' => 'Cesar'),
            array('departamento' => 'Chocó'),
            array('departamento' => 'Córdoba'),
            array('departamento' => 'Cundinamarca'),
            array('departamento' => 'Guainía'),
            array('departamento' => 'Guaviare'),
            array('departamento' => 'Huila'),
            array('departamento' => 'La Guajira'),
            array('departamento' => 'Magdalena'),
            array('departamento' => 'Meta'),
            array('departamento' => 'Nariño'),
            array('departamento' => 'Norte de Santander'),
            array('departamento' => 'Putumayo'),
            array('departamento' => 'Quindío'),
            array('departamento' => 'Risaralda'),
            array('departamento' => 'San Andrés y Providencia'),
            array('departamento' => 'Santander'),
            array('departamento' => 'Sucre'),
            array('departamento' => 'Tolima'),
            array('departamento' => 'Valle del Cauca'),
            array('departamento' => 'Vaupés'),
            array('departamento' => 'Vichada'),


        ];

        Sitio::insert($data);
    }
}
