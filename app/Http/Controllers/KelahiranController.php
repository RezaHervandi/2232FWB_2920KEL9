<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\kelahiran;
use App\pengguna;

class KelahiranController extends Controller
{

protected $informasi = 'Gagal melakukan aksi';

    public function awal()
    {
        $semuaKelahiran = Kelahiran::all();
        return view('kelahiran.awal',compact('semuaKelahiran'));
    }


    public function tambah()
    {
        return view('kelahiran.tambah');
    }


     public function simpan(Request $input)
    {
    
        $kelahiran = new Kelahiran;
        $kelahiran->nama = $input->nama;
        $kelahiran->tempat_lahir = $input->tempat_lahir;
        $kelahiran->tgl_lahir = $input->tgl_lahir;
        $informasi=$kelahiran->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
         return redirect('kelahiran')->with(['informasi'=> $this->informasi]);

    // if ($kelahiran->kelahiran()->save($kelahiran)) $this->informasi = "Berhasil simpan data kelahiran";
    // }
    // return redirect('kelahiran')-> with(['informasi'=>$this->informasi]);
    // }
}
    public function edit($id)
    {
        $kelahiran = Kelahiran::find($id);
        return view('kelahiran.edit')->with(array('kelahiran'=>$kelahiran));
    }

    public function lihat($id)
    {
        $kelahiran = Kelahiran::find($id);
        return view('kelahiran.lihat')->with(array('kelahiran'=>$kelahiran));
    }

    public function update($id, Request $input)
    {

    $kelahiran = Kelahiran::find($id);
    $kelahiran->nama = $input->nama;
    $kelahiran->tempat_lahir = $input->tempat_lahir;
    $kelahiran->tgl_lahir = $input->tgl_lahir;
    $kelahiran->save();

    if(!is_null($input->username)) {
        $pengguna = $kelahiran->pengguna->fill($input->only('username'));
    
    if(!empty($input->password)) $pengguna->password = $input->password;
    
    if($pengguna->save()) $this->informasi = 'Berhasil perbaharui data kelahiran';
    }

    else {
    $this->informasi = 'Berhasil perbaharui data kelahiran';
    }

    return redirect('kelahiran')->with(['informasi'=> $this->informasi]);
    }

     public function hapus($id)
    {
        $kelahiran = Kelahiran::find($id);
    $informasi = $kelahiran->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
    return redirect('kelahiran')->with(['informasi'=>$informasi]);
    }   

}
