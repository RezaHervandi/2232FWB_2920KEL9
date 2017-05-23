<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pindah extends Model
{
    protected $table = 'pindah';
    protected $guarded = ['id'];

public function penduduk(){ 
       return $this->belongsTo(penduduk::class); 
	  }
}
