<fieldset>
<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama", 'required'=>'']) !!}
	</div>	
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Tanggal Lahir</label>
	<div class="col-sm-10">
		{!! Form::date('tgl_lahir',null,['class'=>'form-control','placeholder'=>"Tanggal Lahir", 'required'=>'']) !!}
	</div>	
</div>


<div class="form-group">
	<label class="col-sm-2 control-label">Alamat</label>
	<div class="col-sm-10">
		{!! Form::text('alamat',null,['class'=>'form-control','placeholder'=>"Alamat", 'required'=>'']) !!}
	</div>	
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Status</label>
	<div class="col-sm-10">
		{!! Form::text('status',null,['class'=>'form-control','placeholder'=>"Status", 'required'=>'']) !!}
	</div>	
</div>
</fieldset>




