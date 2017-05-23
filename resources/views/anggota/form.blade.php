<fieldset>
<div class="form-group">
	<label class="col-sm-2 control-label">Nama Kepala Keluarga</label>
	<div class="col-sm-10">
		{!! Form::text('nama_kk',null,['class'=>'form-control','placeholder'=>"Nama Kepala Keluarga", 'required'=>'']) !!}
	</div>	
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Jumlah Anggota Keluarga</label>
	<div class="col-sm-10">
		{!! Form::text('jumlah_ak',null,['class'=>'form-control','placeholder'=>"Jumlah Anggota Keluarga", 'required'=>'']) !!}
	</div>	
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="id_dk">Nomor Kartu Keluarga</label>
	<div class="col-sm-10">
		{!! Form::text('id_kk',$kartu_keluarga->lists('no_kk','id'),null,['class'=>'form-control','id'=>'id_kk','placeholder'=>"Nomor Kartu Keluarga", 'required'=>'']) !!}
	</div>	
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="id_dk">Nama Pemilik Akta</label>
	<div class="col-sm-10">
		{!! Form::select('id_akta',$akta->lists('nama','id'),null,['class'=>'form-control','id'=>'id_akta','placeholder'=>"Nama Pemilik Akta", 'required'=>'']) !!}
	</div>	
</div>
</fieldset>

