<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pindah;
use App\Penduduk;

class PindahController extends Controller
{
     protected $informasi = 'Gagal melakukan aksi';

    public function awal()
    {
        $semuaPindah = Pindah::all();
        return view('pindah.awal',compact('semuaPindah'));
    }


    public function tambah()
    {
        $penduduk = new Penduduk;
        $pindah = new Pindah;
        return view('pindah.tambah',compact('pindah','penduduk'));
    }


     public function simpan(Request $input)
    {
        
        $pindah = new Pindah($input->only('id_dk','tgl_pindah','alamat_asal','alamat_tujuan'));
        $pindah->tgl_pindah = $input->tgl_pindah;
        $pindah->alamat_asal = $input->alamat_asal;
        $pindah->alamat_tujuan = $input->alamat_tujuan;
        if ($pindah->save()) $this->informasi = "pindah berhasil disimpan";
        return redirect('pindah')->with(['informasi'=>$this->informasi]);

}
    public function edit($id)
    {
        $pindah = Pindah::find($id);
        return view('pindah.edit')->with(array('pindah'=>$pindah));
    }

    public function lihat($id)
    {
        $pindah = Pindah::find($id);
        return view('pindah.lihat')->with(array('pindah'=>$pindah));
    }

    public function update($id, Request $input)
    {

    $pindah = Pindah::find($id);
    $pindah->tgl_pindah = $input->tgl_pindah;
    $pindah->alamat_asal = $input->alamat_asal;
    $pindah->alamat_tujuan = $input->alamat_tujuan;
    $pindah->save();

 if(!is_null($input->username)) {
        $pengguna = $pindha->pengguna->fill($input->only('username'));
    
    if(!empty($input->password)) $pengguna->password = $input->password;
    
    if($pengguna->save()) $this->informasi = 'Berhasil perbaharui data pindah';
    }

    else {
    $this->informasi = 'Berhasil perbaharui data pindah';
    }

    return redirect('pindah')->with(['informasi'=> $this->informasi]);
    }

     public function hapus($id)
    {
        $pindah = Pindah::find($id);
    $informasi = $pindah->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
    return redirect('pindah')->with(['informasi'=>$informasi]);
    }   

}

