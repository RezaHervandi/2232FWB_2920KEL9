@extends('master_2')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('kelahiran')}}"><i class="fa text-default fa-chevron-left"></i></a> Perbarui data Kelahiran</strong>
	</div>
	{!! Form::model($kelahiran,['url'=>'kelahiran/edit/'.$kelahiran->id,'class'=>'form-horizontal']) !!}
		@include('kelahiran.form')
		<div style="width:100%;text-align:right; ">
		<button class="btn btn-info"><i class="fa fa-save"></i> Perbarui</button>	
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>
		</div>
	{!! Form::close() !!}	
</div>
@stop