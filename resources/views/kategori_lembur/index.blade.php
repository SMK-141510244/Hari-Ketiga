@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-0 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Data Kategori Lembur </h1></div>
                <div class="panel-body">

	
	<a href="{{ url('/KATEGORI/create') }}" class="btn btn-success"> Tambah Data Kategori</a>
	<hr>

	<table class="table table-striped table-bordered table-hover">
		<thead>
		<tr class="bg-info">
			<th> No </th>
			<th> Kode Lembur </th>
			<th> Jabatan </th>
			<th> Golongan </th>
			<th> Besaran Uang </th>
			<th colspan="2"><center> Action </center></th>
		</tr>
		</thead>
			
		<tbody>
			<?php
				$No = 1; 
			?>
			@foreach($kategori as $kat)
			<tr>
				<td> {{ $No++ }} </td>
				<td> {{ $kat->Kode_lembur }} </td>
				<td> {{ $kat->Jabatan->Nama_jabatan }} </td>
				<td> {{ $kat->Golongan->Nama_golongan }} </td>
				<td> {{ $kat->Besaran_uang }} </td>
				
				 <a href="{{ url('KATEGORI', $kat->id) }}" ></a>
				<td> <a href="{{ route('KATEGORI.edit', $kat->id) }}" class="btn btn-warning">Ubah</a></td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'route' => ['KATEGORI.destroy', $kat->id]]) !!}
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