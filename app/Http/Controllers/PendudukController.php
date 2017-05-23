<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\penduduk;
use App\pengguna;

class PendudukController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi';

    public function awal()
    {
        $semuaPenduduk = Penduduk::all();
        return view('penduduk.awal',compact('semuaPenduduk'));
    }


    public function tambah()
    {
        return view('penduduk.tambah');
    }


     public function simpan(Request $input)
    {
        
        $penduduk = new Penduduk;
        $penduduk->nama = $input->nama;
        $penduduk->tgl_lahir = $input->tgl_lahir;
        $penduduk->alamat = $input->alamat;
        $penduduk->status = $input->status;
        $informasi=$penduduk->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
        return redirect('penduduk')->with(['informasi'=>$this->informasi]);


}
    public function edit($id)
    {
        $penduduk = Penduduk::find($id);
        return view('penduduk.edit')->with(array('penduduk'=>$penduduk));
    }

    public function lihat($id)
    {
        $penduduk = Penduduk::find($id);
        return view('penduduk.lihat')->with(array('penduduk'=>$penduduk));
    }

    public function update($id, Request $input)
    {

    $penduduk = Penduduk::find($id);
    $penduduk->nama = $input->nama;
    $penduduk->tgl_lahir = $input->tgl_lahir;
    $penduduk->alamat = $input->alamat;
    $penduduk->status = $input->status;
    $penduduk->save();

 if(!is_null($input->username)) {
        $pengguna = $penduduk->pengguna->fill($input->only('username'));
    
    if(!empty($input->password)) $pengguna->password = $input->password;
    
    if($pengguna->save()) $this->informasi = 'Berhasil perbaharui data penduduk';
    }

    else {
    $this->informasi = 'Berhasil perbaharui data penduduk';
    }

    return redirect('penduduk')->with(['informasi'=> $this->informasi]);
    }

     public function hapus($id)
    {
        $penduduk = Penduduk::find($id);
    $informasi = $penduduk->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
    return redirect('penduduk')->with(['informasi'=>$informasi]);
    }   

}