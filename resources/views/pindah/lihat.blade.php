@extends('master_2')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('pindah')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Pindah</strong>

	</div>
	<table class="table">
			<tr>
			<td>nama </td>
				<td>:</td>
				<td>{{ $pindah->penduduk->nama}}</td>
			</tr>
			<tr>
				<td>Tanggal Pindah</td>
				<td>:</td>
				<td>{{ $pindah->tgl_pindah}}</td>
			</tr>
			<tr>
				<td>Alamat Asal/td>
				<td>:</td>
				<td>{{ $pindah->alamat_asal }}</td>
			</tr>
			<tr>
				<td>Alamat Sekarang</td>
				<td>:</td>
				<td>{{ $pindah->alamat_tujuan }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $pindah->created_at }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Diperbarui tanggal</td>
				<td class="col-xs-1"> :</td>
				<td>{{ $pindah->updated_at }}</td>
			</tr>
	</table>
</div>
@stop