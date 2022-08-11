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
            array('sitio'=>'popayan'),
            array('sitio'=>'cali'),
        ];

        Mesajurado::insert($data);
    }
}
