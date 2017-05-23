@extends('master_2')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('penduduk')}}"><i class="fa text-default fa-chevron-left"></i></a> Perbarui data Penduduk</strong>
	</div>
	{!! Form::model($penduduk,['url'=>'penduduk/edit/'.$penduduk->id,'class'=>'form-horizontal']) !!}
		@include('penduduk.form')
		<div style="width:100%;text-align:right; ">
		<button class="btn btn-info"><i class="fa fa-save"></i> Perbarui</button>	
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>
		</div>
	{!! Form::close() !!}	
</div>
@stop