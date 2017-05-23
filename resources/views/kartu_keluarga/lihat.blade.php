@extends('master_2')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('anggota')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Kartu Keluarga</strong>

	</div>
	<table class="table">
			<tr>
				<td>Nomor kartu keluarga</td>
				<td>:</td>
				<td>{{ $kartu_keluarga->no_kk}}</td>
			</tr>
			<tr>
				<td>Tanggal Terbit</td>
				<td>:</td>
				<td>{{ $kartu_keluarga->tgl_terbit }}</td>
			</tr>
			
			<tr>
				<td class="col-xs-4"> Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $kelahiran->created_at }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Diperbarui tanggal</td>
				<td class="col-xs-1"> :</td>
				<td>{{ $kelahiran->updated_at }}</td>
			</tr>
	</table>
</div>
@stop