<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Akta;
use App\Pengguna;

class AktaController extends Controller
{

	protected $informasi = 'Gagal melakukan aksi';

    public function awal()
    {
    	$semuaAkta = Akta::all();
    	return view('akta.awal',compact('semuaAkta'));
    }

    public function tambah()
    {
    	return view('akta.tambah');
    }

    public function simpan(Request $input)
    {
		$akta = new Akta; 
    	$akta->nama = $input->nama;
    	$akta->tgl_lahir = $input->tgl_lahir;
    	$akta->tgl_terbit =$input->tgl_terbit;
    	$informasi=$akta->save() ? 'Berhasil simpan data akta' : 'Gagal simpan data';

        return redirect('akta')->with(['informasi'=> $this->informasi]);

    }
   
    public function edit($id)
    {
        $akta = Akta::find($id);
        return view('akta.edit')->with(array('akta'=>$akta));
    }

    public function lihat($id)
    {
        $akta = Akta::find($id);
        return view('akta.lihat')->with(array('akta'=>$akta));
    }


   public function update($id, Request $input)
    {

    $akta = Akta::find($id);
    $akta->nama = $input->nama;
    $akta->tgl_lahir = $input->tgl_lahir;
    $akta->tgl_terbit = $input->tgl_terbit; 
    $akta->save();

    if(!is_null($input->username)) {
        $pengguna = $akta->pengguna->fill($input->only('username'));
    
    if(!empty($input->password)) $pengguna->password = $input->password;
    
    if($pengguna->save()) $this->informasi = 'Berhasil perbaharui data akta';
    }

    else {
    $this->informasi = 'Berhasil perbaharui data akta';
    }

    return redirect('akta')->with(['informasi'=> $this->informasi]);
    }


     public function hapus($id)
    {
        $akta = Akta::find($id);
        $informasi = $akta->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';

        return redirect('akta')-> with(['informasi'=>$informasi]);

    }
}

