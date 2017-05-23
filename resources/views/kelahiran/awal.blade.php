@extends('master_2')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading" align="center">
		<strong> Seluruh Data kelahiran </strong>
		<a href="{{url('kelahiran/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i>Data Kelahiran </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama </th>
				<th> Tempat Lahir </th>
				<th> Tanggal Lahir </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuaKelahiran as $kelahiran)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $kelahiran->nama or 'nama kosong' }}</td>
					<td>{{ $kelahiran->tempat_lahir or 'tempat_lahir kosong' }}</td>
					<td>{{ $kelahiran->tgl_lahir or 'tgl_lahir kosong' }}</td>
				
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('kelahiran/edit/'.$kelahiran->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	

						<a href="{{url('kelahiran/'.$kelahiran->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>

						<a href="{{url('kelahiran/hapus/'.$kelahiran->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop