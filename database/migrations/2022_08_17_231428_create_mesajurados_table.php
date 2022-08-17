<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesajuradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesajurados', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('sitio_id');
            $table->foreign('sitio_id')->references('id')->on('sitios');
            //
            $table->UnsignedBigInteger('perfil_id');
            $table->foreign('perfil_id')->references('id')->on('perfiljurados');
            
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mesajurados');
    }
}
