<fieldset>
<div class="form-group">
	<label class="col-sm-2 control-label">Nomor Kartu Keluarga</label>
	<div class="col-sm-10">
		{!! Form::text('no_kk',null,['class'=>'form-control','placeholder'=>"Nomor Kartu Keluarga", 'required'=>'']) !!}
	</div>	
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Tanggal Terbit</label>
	<div class="col-sm-10">
		{!! Form::date('tgl_terbit',null,['class'=>'form-control','placeholder'=>"Tanggal Terbit", 'required'=>'']) !!}
	</div>	
</div>

</fieldset>

