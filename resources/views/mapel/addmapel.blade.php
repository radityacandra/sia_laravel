@extends('layouts.app')

@section('htmlheader_title')
	Tambah Mata Pelajaran
@endsection

@section('contentheader_title')
	Tambah Mata Pelajaran
@endsection

@section('contentheader_description')
	Tambah data mata pelajaran diajarkan SMA N 1 Salatiga
@endsection

@section('main-content')
	<div class="row">
		<div class="col-md-12">
			<div class="box box-solid box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Data Mata Pelajaran</h3>
				</div>
				<div class="box-body">
				<form class="form-horizontal">

					<div class="form-group">
						<div class="col-md-5">
							<label class="control-label">Kode Mapel</label>
						</div>
						<div class="col-md-5">
							<input type="text" name="kode_mapel" class="form-control" placeholder="Masukkan kode mapel">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-5">
							<label class="control-label">Nama Mapel</label>
						</div>
						<div class="col-md-5">
							<input type="text" name="nama_mapel" class="form-control" placeholder="Masukkan nama mapel">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-5">
							<label class="control-label">Bobot Mapel</label>
						</div>
						<div class="col-md-3">
							<div class="input-group">
									<input type="text" class="form-control" name="bobot" aria-describedby="basic-addon" placeholder="angka">
									<span class="input-group-addon" id="basic-addon">Jam Pelajaran</span>
								</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-5">
							<label class="control-label">Konsentrasi</label>
						</div>
						<div class="col-md-5">
							<input type="text" name="konsentrasi" class="form-control" placeholder="Konsentrasi mapel">
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="box box-solid box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Hasil Pencarian</h3>
				</div>
				<div class="box-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Kode Mapel</th>
								<th>Nama Mata Pelajaran</th>
								<th>Bobot</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>MTK1a</td>
								<td>Matematika Kelas X Semester 1</td>
								<td>3</td>
								<td>
									<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
									<a class="btn btn-default" href="{{ url('mapel/detail') }}"><i class="fa fa-info"></i> Lihat Detail</a>
									<a class="btn btn-default"><i class="fa fa-trash"></i> Hapus</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection