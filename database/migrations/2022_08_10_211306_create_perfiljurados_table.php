<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfiljuradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfiljurados', function (Blueprint $table) {
            $table->id();
            $table->Integer('identificacion')->length(5);
            $table->string('nombre',45);
            $table->string('apellido',45);
            $table->string('email',60);

            $table->unsignedBigInteger('id_mesajurado');
            $table->foreign('id_mesajurado')->references('id')->on('mesajurados')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfiljurados');
    }
}
