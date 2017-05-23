<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anggota extends Model

{
    protected $table = 'anggota';
    protected $guarded = ['id'];

    public function akta()
    {
    	return $this->hasOne(akta::class);
    }

    public function kartu_keluarga()
    {
    	return $this->belongTo(kartu_keluarga::class);
    }
}
