@extends('master_2')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading" align="center">
		<strong> Seluruh Data Pindah </strong>
		<a href="{{url('pindah/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> Pindah </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama </th>
				<th> Tanggal Pindah </th>
				<th> Alamat Asal </th>>
				<th> Alamat Sekarang </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>

			<?php $x=1;?>
			@foreach ($semuaPindah as $Pin)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $Pin->penduduk->nama or 'nama kosong' }}</td>
					<td>{{ $Pin->tgl_pindah or 'tanggal kosong' }}</td>
					<td>{{ $Pin->alamat_asal or 'jumlah kosong' }}</td>
					<td>{{ $Pin->alamat_tujuan or 'nomor kosong' }}</td>
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('pindah/edit/'.$Pin->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	

						<a href="{{url('pindah/'.$Pin->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>

						<a href="{{url('pindah/hapus/'.$Pin->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop