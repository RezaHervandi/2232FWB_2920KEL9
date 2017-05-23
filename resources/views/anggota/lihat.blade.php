@extends('master_2')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('anggota')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Anggota</strong>

	</div>
	<table class="table">
			<tr>
				<td>Nama Kepala Keluarga</td>
				<td>:</td>
				<td>{{ $anggota->nama_kk}}</td>
			</tr>
			<tr>
				<td>Jumlah Anggota</td>
				<td>:</td>
				<td>{{ $anggota->jumlah_ak }}</td>
			</tr>
			<tr>
				<td>No Kartu Keluarga</td>
				<td>:</td>
				<td>{{ $kartu_keluarga->no_kk }}</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{ $akta->nama }}</td>
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