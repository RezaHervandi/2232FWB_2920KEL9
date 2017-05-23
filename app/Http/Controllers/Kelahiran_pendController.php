<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kelahiran_pend;

class Kelahiran_pendController extends Controller
{
    public function awal()
    {
    	return "H E L L O KELAHIRAN PENDUDUK";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$kelahiran_pend = new Kelahiran_pend();
    	$kelahiran_pend->id ='';
    	$kelahiran_pend->id_kelahiran ='';
    	$kelahiran_pend->id_dk ='';
    	$kelahiran_pend->save();
    	return "{$kelahiran_pend->id}{$kelahiran_pend->id_kelahiran}{$kelahiran_pend->id_dk}";
}
}