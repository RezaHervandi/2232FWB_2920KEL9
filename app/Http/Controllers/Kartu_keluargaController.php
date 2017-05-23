<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kartu_keluarga;

class Kartu_keluargaController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi';
    
    public function awal()
    {
        $semuaKartu_keluarga = Kartu_keluarga::all();
        return view ('kartu_keluarga.awal',compact('semuaKartu_keluarga'));
    }

    public function tambah()
    {
        $kartu_keluarga = new Kartu_keluarga;
   
        return view ('kartu_keluarga.tambah',compact('kartu_keluarga'));
    }

    public function simpan(Request $input)
    {
        $kartu_keluarga = new Kartu_keluarga; 
        $kartu_keluarga->no_kk = $input->no_kk;
        $kartu_keluarga->tgl_terbit =$input->tgl_terbit;
        if ($kartu_keluarga->save()) $this->informasi = "data kartu_keluarga berhasil disimpan";
        return redirect('kartu_keluarga')->with(['informasi'=> $this->informasi]);

    }
   
    public function edit($id)
    {
        $kartu_keluarga = Kartu_keluarga::find($id);
        return view('kartu_keluarga.edit',compact('semuaKartu_keluarga'));
    }

    public function lihat($id)
    {
        $kartu_keluarga = Kartu_keluarga::find($id);
        return view('kartu_keluarga.lihat')->with(array('kartu_keluarga'=>$kartu_keluarga));
    }


   public function update($id, Request $input)
    {

    $kartu_keluarga = Kartu_keluarga::find($id);
    $kartu_keluarga->no_kk = $input->no_kk;
    $kartu_keluarga->tgl_terbit = $input->tgl_terbit; 
    $informasi=$kartu_keluarga->save() ? 'Berhasil update data' : 'Gagal update data';

    return redirect('')->with(['informasi'=> $this->informasi]);
    }
     public function hapus($id)
    {
        $kartu_keluarga = Kartu_keluarga::find($id);
        $informasi = $kartu_keluarga->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';

        return redirect('kartu_keluarga')-> with(['informasi'=>$informasi]);

}
}