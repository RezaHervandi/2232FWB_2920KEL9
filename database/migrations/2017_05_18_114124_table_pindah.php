<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePindah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pindah', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tgl_pindah');
            $table->string('alamat_asal');
            $table->string('alamat_tujuan');
            $table->integer('id_dk',false,true)->unsigned();
            $table->timestamps();
        });

        Schema::table('pindah',function(Blueprint $table) {
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
        Schema::drop('pindah');
    }
}
