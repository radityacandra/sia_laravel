@extends('layouts.app')

@section('htmlheader_title')
	Detail Kelas
@endsection

@section('contentheader_title')
	Detail Kelas
@endsection

@section('contentheader_description')
	Detail informasi kelas SMA Negeri 1 Salatiga
@endsection

@section('main-content')
	<div class="row">
		<div class="col-md-12">
			<div class="box box-solid box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Informasi Mata Pelajaran</h3>
				</div>
				<div class="box-body">
					<div class="col-md-12">
						<div class="col-md-4 col-sm-6"><h3>Nama Kelas</h3></div><div class="col-md-8 col-sm-6"><h3>: X-9</h3></div>
						<div class="col-md-4 col-sm-6"><h3>Kode Kelas</h3></div><div class="col-md-8 col-sm-6"><h3>: X9</h3></div>
						<div class="col-md-4 col-sm-6"><h3>Konsentrasi</h3></div><div class="col-md-8 col-sm-6"><h3>: Ilmu Pengetahuan Alam</h3></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="box box-solid box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Informasi Mata Pelajaran</h3>
					<div class="box-tools pull-right">
						<a href="{{ url('student/edit/grade') }}" style="font-size: 1.25em;"><span class="label label-warning" ><i class="fa fa-pencil"></i> Perbarui Kelas</span></a>
					</div>
				</div>
				<div class="box-body">
					<table class="table table-striped table-hover">
						<thead>
						<tr>
							<th>Kode Mapel</th>
							<th>Nama Mapel</th>
							<th>Bobot Mapel</th>
							<th>Nama Pengajar</th>
							<th>Action</th>
						</tr>
						</thead>
						
						<tbody>
						<tr>
							<td>MTK1a</td>
							<td>Matematika Kelas X Semester 1</td>
							<td>3 Jam Pelajaran</td>
							<td>Raditya Chandra Buana</td>
							<td><a class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detail</a></td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="box box-solid box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Informasi Siswa Kelas
					
					</h3>
					<div class="box-tools pull-right">
						<a href="{{ url('student/edit/grade') }}" style="font-size: 1.25em;"><span class="label label-warning" ><i class="fa fa-pencil"></i> Perbarui Guru</span></a>
					</div>
				</div>
				<div class="box-body">
					<table class="table table-striped table-hover">
						<thead>
						<tr>
							<th>NIS</th>
							<th>Nama Lengkap Siswa</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>330335</td>
							<td>Raditya Chandra Buana</td>
							<td><a class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detail</a></td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
