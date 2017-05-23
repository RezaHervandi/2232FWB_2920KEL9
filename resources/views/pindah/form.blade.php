<fieldset>
<div class="form-group">
	<label class="col-sm-2 control-label" id="id_dk">Nama Penduduk</label>
	<div class="col-sm-10">
		{!! Form::select('id_dk',$penduduk->lists('nama','id'),null,['class'=>'form-control','id'=>'id_dk','placeholder'=>"Nama Penduduk", 'required'=>'']) !!}
	</div>	
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="pindah_id">Tanggal Pindah</label>
	<div class="col-sm-10">
		{!! Form::date('tgl_pindah',null,['class'=>'form-control','placeholder'=>"Tanggal Pindah", 'required'=>'']) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="pindah_id">Alamat Asal</label>
	<div class="col-sm-10">
		{!! Form::text('alamat_asal',null,['class'=>'form-control','placeholder'=>"Alamat Asal", 'required'=>'']) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="pindah_id">Alamat Sekarang</label>
	<div class="col-sm-10">
		{!! Form::text('alamat_tujuan',null,['class'=>'form-control','placeholder'=>"Alamat Sekarang", 'required'=>'']) !!}
	</div>	
</div>
</fieldset>



