<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Anggota;
use App\Akta;
use App\Kartu_keluarga;

class AnggotaController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi';
    
    public function awal()
    {
        $semuaAnggota = Anggota::all();
        return view ('anggota.awal',compact('semuaAnggota'));
    }

    public function tambah()
    {
    	return view('anggota.tambah');
    
    }

    public function simpan(Request $input)
    {
        $anggota = new Anggota; 
        $anggota->nama_kk = $input->nama_kk;
        $anggota->jumlah_ak =$input->jumlah_ak;
        $informasi=$anggota->save() ? 'Berhasil simpan data' : 'gagal simpan data';
        return redirect('anggota')->with(['informasi'=> $this->informasi]);

    }
   
    public function edit($id)
    {
        $anggota = Anggota::find($id);
        return view('anggota.edit',compact('semuaAnggota'));
    }

    public function lihat($id)
    {
        $anggota = Anggota::find($id);
        return view('anggota.lihat')->with(array('anggota'=>$akta));
    }


   public function update($id, Request $input)
    {

    $anggota = Anggota::find($id);
    $anggota->nama_kk = $input->nama_kk;
    $anggota->jumlah_ak = $input->jumlah_ak; 
    $informasi=$anggota->save() ? 'Berhasil update data' : 'Gagal update data';

    return redirect('')->with(['informasi'=> $this->informasi]);
    }
     public function hapus($id)
    {
        $anggota = Anggota::find($id);
        $informasi = $anggota->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';

        return redirect('anggota')-> with(['informasi'=>$informasi]);

    }
}

