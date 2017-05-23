@extends('master_2')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading" align="center">
		<strong> Seluruh Data Kematian </strong>
		<a href="{{url('kematian/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i>Data Kematian </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama </th>
				<th> Tempat Kematian </th>
				<th> Tanggal Kematian </th>
				<th> Sebab </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuaKematian as $kematian)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $kematian->nama or 'nama kosong' }}</td>
					<td>{{ $kematian->tempat_kematian or 'tempat_kematian kosong' }}</td>
					<td>{{ $kematian->tgl_kematian or 'tgl_kematian kosong' }}</td>
					<td>{{ $kematian->sebab or 'sebab kosong'}}
				
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('kematian/edit/'.$kematian->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	

						<a href="{{url('kematian/'.$kematian->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>

						<a href="{{url('kematian/hapus/'.$kematian->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop