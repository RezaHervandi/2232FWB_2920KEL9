@extends('master_2')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading" align="center">
		<strong> Seluruh Data Anggota </strong>
		<a href="{{url('anggota/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i>Data Anggota </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama KK </th>
				<th> Jumlah Anggota Keluarga </th>>
				<th> Nomor Kartu Keluarga </th>
				<th> Nama Anggota Keluarga </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuaAnggota as $Agt)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $Agt->nama_kk or 'nama kosong' }}</td>
					<td>{{ $Agt->jumlah_ak or 'jumlah kosong' }}</td>
					<td>{{ $Agt->kartu_keluarga->no_kk or 'nomor kosong' }}</td>
					<td>{{ $Agt->akta->nama or 'nama kosong' }}</td>
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('anggota/edit/'.$Agt->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	

						<a href="{{url('anggota/'.$Agt->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>

						<a href="{{url('anggota/hapus/'.$Agt->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop