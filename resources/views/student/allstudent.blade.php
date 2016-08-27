@extends('layouts.app')

@section('htmlheader_title')
	Semua Siswa
@endsection

@section('contentheader_title')
	Semua Siswa
@endsection

@section('contentheader_description')
	Data semua siswa SMA N 1 Salatiga
@endsection

@section('main-content')
	<div class="row">
		<div class="col-md-12">
			<div class="box box-solid box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Panel Kontrol</h3>
				</div>
				<div class="box-body">
					<form class="form-horizontal">
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Cari Berdasar Nama</label>
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control" name="student_name" placeholder="masukkan nama siswa">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Cari Berdasar NIM</label>
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control" name="student_nim" placeholder="masukkan NIM siswa">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Kelas</label>
							</div>
							<div class="col-md-5">
								<select class="form-control" name="class">
									<option>X-1</option>
									<option>X-2</option>
									<option>X-3</option>
									<option>X-4</option>
									<option>X-5</option>
									<option>XI IA-1</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Urutkan Berdasarkan</label>
							</div>
							<div class="col-md-3">
								<select class="form-control" name="class">
									<option>NIM</option>
									<option>Nama</option>
									<option>Kelas</option>
									<option>Status</option>
								</select>
							</div>
							<div class="col-md-2">
								<select class="form-control" name="class">
									<option>ASC</option>
									<option>DESC</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-3 col-md-offset-5">
								<button type="submit" class="col-md-10 btn btn-primary"><i class="fa fa-search"></i> Cari</button>
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
							<th>NIM</th>
							<th>Nama Lengkap</th>
							<th>Kelas</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>39511</td>
							<td>Raditya Chandra Buana</td>
							<td>X-9</td>
							<td><label class="label label-info">Aktif</label></td>
							<td>
								<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
								<a class="btn btn-default" href="{{ url('student/detail') }}"><i class="fa fa-info"></i> Lihat Detail</a>
								<a class="btn btn-default"><i class="fa fa-trash"></i> Hapus</a>
							</td>
						</tr>
						
						<tr>
							<td>39511</td>
							<td>Raditya Chandra Buana</td>
							<td>X-9</td>
							<td><label class="label label-danger">Nonaktif</label></td>
							<td>
								<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
								<a class="btn btn-default" href="{{ url('student/detail') }}"><i class="fa fa-info"></i> Lihat Detail</a>
								<a class="btn btn-default"><i class="fa fa-trash"></i> Hapus</a>
							</td>
						</tr>
						
						<tr>
							<td>39511</td>
							<td>Raditya Chandra Buana</td>
							<td>X-9</td>
							<td><label class="label label-info">Aktif</label></td>
							<td>
								<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
								<a class="btn btn-default" href="{{ url('student/detail') }}"><i class="fa fa-info"></i> Lihat Detail</a>
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
