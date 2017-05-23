@extends('master_2')
@section('container')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<strong><a href="{{url('kematian')}}"><i style="color:white;" class="fa text-default fa-chevron-left"></i></a>Tambah Data Kematian</strong>
		</div>
		{!! Form::open(['url'=>'kematian/simpan','class'=>'form-horizontal']) !!}
		@include('kematian.form')
		<div style="width:100%;text-align:right;">
			<button class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
			<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>	
		</div>
		{!! Form::close() !!}
	</div>
	@stop