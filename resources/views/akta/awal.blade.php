@extends('master_2')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading" align="center">
		<strong> Seluruh Data Akta Kelahiran </strong>
		<a href="{{url('akta/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> Akta Kelahiran </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama </th>
				<th> Tanggal Lahir </th>
				<th> Tanggal Terbit </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuaAkta as $akta)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $akta->nama or 'nama kosong' }}</td>
					<td>{{ $akta->tgl_lahir or 'tgl_lahir kosong' }}</td>
					<td>{{ $akta->tgl_terbit or 'tgl_terbit kosong' }}</td>
				
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('akta/edit/'.$akta->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	

						<a href="{{url('akta/'.$akta->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>

						<a href="{{url('akta/hapus/'.$akta->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop