@extends('master_2')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading" align="center">
		<strong> Seluruh Data Kartu Keluarga </strong>
		<a href="{{url('kartu_keluarga/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i>Data Kartu Keluarga </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nomor Kartu Keluarga </th>
				<th> Tanggal terbit </th>>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuaKartu_keluarga as $kartu_keluarga)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $kartu_keluarga->no_kk or 'nomor kosong' }}</td>
					<td>{{ $kartu_keluarga->tgl_terbit or 'tanggal kosong' }}</td>
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('kartu_keluarga/edit/'.$kartu_keluarga->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	

						<a href="{{url('kartu_keluarga/'.$kartu_keluarga->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>

						<a href="{{url('kartu_keluarga/hapus/'.$kartu_keluarga->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop