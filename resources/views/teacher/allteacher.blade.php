@extends('layouts.app')

@section('htmlheader_title')
	Semua Guru
@endsection

@section('contentheader_title')
	Semua Guru
@endsection

@section('contentheader_description')
	Data semua Guru SMA N 1 Salatiga
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
								<input type="text" class="form-control" name="teacher_name" placeholder="masukkan nama guru">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Cari Berdasar NIP</label>
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control" name="teacher_nip" placeholder="masukkan NIP guru">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Status</label>
							</div>
							<div class="col-md-5">
								<select class="form-control" name="status">
									<option>Guru</option>
									<option>Wali Kelas</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Urutkan Berdasarkan</label>
							</div>
							<div class="col-md-3">
								<select class="form-control" name="class">
									<option>NIP</option>
									<option>Nama</option>
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
							<th>NIP</th>
							<th>Nama Lengkap</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>1981 0921 2014 04 1001</td>
							<td>Dr. Eng. Raditya Chandra Buana, S.T., M.Eng.</td>
							<td><label class="label label-info">Guru</label></td>
							<td>
								<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
								<a class="btn btn-default" href="{{ url('teacher/detail') }}"><i class="fa fa-info"></i> Lihat Detail</a>
								<a class="btn btn-default"><i class="fa fa-trash"></i> Hapus</a>
							</td>
						</tr>
						
						<tr>
							<td>1981 0921 2014 04 1001</td>
							<td>Raditya Chandra Buana</td>
							<td><label class="label label-warning">Wali Kelas</label></td>
							<td>
								<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
								<a class="btn btn-default" href="{{ url('teacher/detail') }}"><i class="fa fa-info"></i> Lihat Detail</a>
								<a class="btn btn-default"><i class="fa fa-trash"></i> Hapus</a>
							</td>
						</tr>
						
						<tr>
							<td>1981 0921 2014 04 1001</td>
							<td>Raditya Chandra Buana</td>
							<td><label class="label label-info">Guru</label></td>
							<td>
								<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
								<a class="btn btn-default" href="{{ url('teacher/detail') }}"><i class="fa fa-info"></i> Lihat Detail</a>
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