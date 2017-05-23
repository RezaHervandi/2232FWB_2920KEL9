<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableAnggotaKeluarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kk');
            $table->integer('jumlah_ak',false,true)->unsigned();
            $table->integer('id_kk',false,true)->unsigned();
            $table->integer('id_akta',false,true)->unsigned();
            $table->timestamps();
        });

        Schema::table('anggota',function(Blueprint $table){
            $table->foreign('id_kk')->references('id')->on('kartu_keluarga')->onUpdate('cascade')->onDelete('cascade');
        });

         Schema::table('anggota',function(Blueprint $table){
            $table->foreign('id_akta')->references('id')->on('akta')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('anggota');
    }
}
