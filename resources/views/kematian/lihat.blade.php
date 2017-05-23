@extends('master_2')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('kematian')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Kematian</strong>

	</div>
	<table class="table">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{ $kematian->nama}}</td>
			</tr>
			<tr>
				<td>Tempat Kematian</td>
				<td>:</td>
				<td>{{ $kematian->tgl_lahir }}</td>
			</tr>
			<tr>
				<td>Tanggal Kematian</td>
				<td>:</td>
				<td>{{ $kematian->tgl_kematian }}</td>
			</tr>
			<tr>
				<td>Sebab</td>
				<td>:</td>
				<td>{{ $kematian->sebab }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $kematian->created_at }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Diperbarui tanggal</td>
				<td class="col-xs-1"> :</td>
				<td>{{ $kematian->updated_at }}</td>
			</tr>
	</table>
</div>
@stop