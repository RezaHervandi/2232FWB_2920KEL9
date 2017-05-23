<fieldset>
<div class="form-group">
	<label class="col-sm-2 control-label">nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"nama"]) !!}
	</div>	
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">tempat_kematian</label>
	<div class="col-sm-10">
		{!! Form::text('tempat_kematian',null,['class'=>'form-control','placeholder'=>"tempat_kematian"]) !!}
	</div>	
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">tgl_kematian</label>
	<div class="col-sm-10">
		{!! Form::date('tgl_kematian',null,['class'=>'form-control','placeholder'=>"tgl_kematian"]) !!}
	</div>	
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">sebab</label>
	<div class="col-sm-10">
		{!! Form::text('sebab',null,['class'=>'form-control','placeholder'=>"sebab"]) !!}
	</div>	
</div>
</fieldset>
