<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableKelahiranPenduduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelahiran_pend', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kelahiran',false,true)->unsigned();
            $table->integer('id_dk',false,true)->unsigned();
            $table->timestamps();
        });
        Schema::table('kelahiran_pend',function(Blueprint $table) {
            $table->foreign('id_kelahiran')->references('id')->on('kelahiran')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('kelahiran_pend',function(Blueprint $table) {
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
        Schema::drop('kelahiran_pend');
    }
}
