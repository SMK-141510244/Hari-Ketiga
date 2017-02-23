@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-0 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Data Tunjangan Pegawai </h1></div>
                <div class="panel-body">

	
	<a href="{{ url('/TUNJANGANPEG/create') }}" class="btn btn-success"> Tambah Data Tunjangan Pegawai</a>
	<hr>

	<table class="table table-striped table-bordered table-hover">
		<thead>
		<tr class="bg-info">
			<th> No </th>
			<th> Kode Tunjangan </th>
			<th> Nama Pegawai </th>
			<th> Jabatan </th>
			<th> Golongan </th>
			<th> Status Perkawinan </th>
			<th> Jumlah Anak</th>
			<th> Besaran Uang </th>
			<th colspan="2"><center> Action </center></th>
		</tr>
		</thead>
			
		<tbody>
			<?php
				$No = 1; 
			?>
			@foreach($tunjanganpeg as $tunpeg)
			<tr>
				<td> {{ $No++ }} </td>
				<td> {{ $tunpeg->Tunjangans->Kode_tunjangan }} </td>
				<td> {{ $tunpeg->Pegawai->User->name }} </td>
				<td> {{ $tunpeg->Pegawai->Jabatan->Nama_jabatan}}</td>
				<td> {{ $tunpeg->Pegawai->Golongan->Nama_golongan}}</td>
				<td> {{ $tunpeg->Tunjangans->Status }} </td>
				<td> {{ $tunpeg->Tunjangans->Jumlah_anak }} </td>
				<td> {{ $tunpeg->Tunjangans->Besaran_uang}}</td>
				
				
				 <a href="{{ url('TUNJANGANPEG', $tunpeg->id) }}" ></a>
				<td> <a href="{{ route('TUNJANGANPEG.edit', $tunpeg->id) }}" class="btn btn-warning">Ubah</a></td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'route' => ['TUNJANGANPEG.destroy', $tunpeg->id]]) !!}
					{!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>

	</table>
</div>
</div>
</div>
</div>
</div>
</div>
@stop