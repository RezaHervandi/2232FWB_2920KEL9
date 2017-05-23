<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableKartuKeluarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartu_keluarga', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_kk',false,true)->unsigned();
            $table->date('tgl_terbit');
            $table->integer('id_dk',false,true)->unsigned();
            $table->timestamps();
        });

        Schema::table('kartu_keluarga', function(Blueprint $table) {
            $table->foreign('id_dk')->references('id')->on('penduduk')->onUpdate('cascade')->onDelete('cascade');
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kartu_keluarga');
    }
}
