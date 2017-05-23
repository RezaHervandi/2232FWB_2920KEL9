@extends('master_2')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading" align="center">
		<strong> Seluruh Data Penduduk </strong>
		<a href="{{url('penduduk/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> Data Penduduk </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama </th>
				<th> Tanggal Lahir </th>
				<th> Alamat </th>
				<th> Status </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuaPenduduk as $penduduk)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $penduduk->nama or 'nama kosong' }}</td>
					<td>{{ $penduduk->tgl_lahir or 'tgl_lahir kosong' }}</td>
					<td>{{ $penduduk->alamat or 'alamat kosong' }}</td>
					<td>{{ $penduduk->status or 'status kosong' }}</td>
				
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('penduduk/edit/'.$penduduk->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	

						<a href="{{url('penduduk/'.$penduduk->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>

						<a href="{{url('penduduk/hapus/'.$penduduk->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop