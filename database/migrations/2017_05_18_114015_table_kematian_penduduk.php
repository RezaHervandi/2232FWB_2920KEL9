<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableKematianPenduduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kematian_pend', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kematian',false,true)->unsigned();
            $table->integer('id_dk',false,true)->unsigned();
            $table->timestamps();
        });

        Schema::table('kematian_pend',function(Blueprint $table) {
            $table->foreign('id_kematian')->references('id')->on('kematian')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('kematian_pend',function(Blueprint $table) {
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
        Schema::drop('kematian_pend');
    }
}
