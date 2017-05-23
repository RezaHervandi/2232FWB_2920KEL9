<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kematian;
use App\Pengguna;

class KematianController extends Controller
{
   protected $informasi = 'Gagal saudara';

    public function awal()
    {
        $semuaKematian = Kematian::all();
        return view('kematian.awal',compact('semuaKematian'));
    }


    public function tambah()
    {
        return view('kematian.tambah');
    }


     public function simpan(Request $input)
    {
        
    $kematian = new Kematian;
    $kematian->nama = $input->nama;
    $kematian->tempat_kematian = $input->tempat_kematian;
    $kematian->tgl_kematian = $input->tgl_kematian;
    $kematian->sebab = $input->sebab;
    $informasi=$kematian->save() ? 'Berhasil simpan data' : 'Gagal simpan data';

    return redirect('kematian')->with(['informasi'=> $this->informasi]);

}
    public function edit($id)
    {
        $kematian = Kematian::find($id);
        return view('kematian.edit')->with(array('kematian'=>$kematian));
    }

    public function lihat($id)
    {
        $kematian = Kematian::find($id);
        return view('kematian.lihat')->with(array('kematian'=>$kematian));
    }

    public function update($id, Request $input)
    {

    $kematian = Kematian::find($id);
    $kematian->nama = $input->nama;
    $kematian->tempat_kematian = $input->tempat_kematian;
    $kematian->tgl_kematian = $input->tgl_kematian;
    $kematian->save();

    if(!is_null($input->username)) {
        $pengguna = $kematian->pengguna->fill($input->only('username'));
    
    if(!empty($input->password)) $pengguna->password = $input->password;
    
    if($pengguna->save()) $this->informasi = 'Berhasil perbaharui data kematian';
    }

    else {
    $this->informasi = 'Berhasil perbaharui data kematian';
    }

    return redirect('kematian')->with(['informasi'=> $this->informasi]);
    }

     public function hapus($id)
    {
        $kematian = Kematian::find($id);
    $informasi = $kematian->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
    return redirect('kematian')->with(['informasi'=>$informasi]);
    }   
 
}
