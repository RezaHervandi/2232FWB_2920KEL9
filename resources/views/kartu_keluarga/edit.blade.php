@extends('master_2')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('kartu_keluarga')}}"><i class="fa text-default fa-chevron-left"></i></a> Perbarui data kartu keluarga</strong>
	</div>
	{!! Form::model($kartu_keluarga,['url'=>'kartu_keluarga/edit/'.$kartu_keluarga->id,'class'=>'form-horizontal']) !!}
		@include('kartu_keluarga.form')
		<div style="width:100%;text-align:right; ">
		<button class="btn btn-info"><i class="fa fa-save"></i> Perbarui</button>	
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>
		</div>
	{!! Form::close() !!}	
</div>
@stop