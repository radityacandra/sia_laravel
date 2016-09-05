@extends('layouts.app')

@section('htmlheader_title')
	Semua Mata Pelajaran
@endsection

@section('contentheader_title')
	Semua Mata Pelajaran
@endsection

@section('contentheader_description')
	Data semua Mata Pelajaran SMA N 1 Salatiga
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
								<input type="text" class="form-control" name="mapel_name" placeholder="masukkan nama mata pelajaran">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Urutkan Berdasarkan</label>
							</div>
							<div class="col-md-3">
								<select class="form-control" name="class">
									<option>Kode Mapel</option>
									<option>Nama Mata Pelajaran</option>
									<option>Bobot</option>
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
