@extends('master_2')
@section('container')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<strong><a href="{{url('akta')}}"><i style="color:white;" class="fa text-default fa-chevron-left"></i></a>Tambah Data Akta</strong>
		</div>
		{!! Form::open(['url'=>'akta/simpan','class'=>'form-horizontal']) !!}
		@include('akta.form')
		<div style="width:100%;text-align:right;">
			<button class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
			<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>	
		</div>
		{!! Form::close() !!}
	</div>
	@stop