@extends('layouts.app')

@section('htmlheader_title')
	Detail Mata Pelajaran
@endsection

@section('contentheader_title')
	Detail Mata Pelajaran
@endsection

@section('contentheader_description')
	Detail pengajaran mata pelajaran SMA N 1 Salatiga
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
						<div class="col-md-4 col-sm-6"><h3>Nama Mata Pelajaran</h3></div><div class="col-md-8 col-sm-6"><h3>: Matematika Kelas X Semester 1</h3></div>
						<div class="col-md-4 col-sm-6"><h3>Kode Mata Pelajaran</h3></div><div class="col-md-8 col-sm-6"><h3>: MTK1a</h3></div>
						<div class="col-md-4 col-sm-6"><h3>Bobot Mata Pelajaran</h3></div><div class="col-md-8 col-sm-6"><h3>: 3 Jam Pelajaran</h3></div>
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
					<h3 class="box-title">Relasi Kelas</h3>
					<div class="box-tools pull-right">
						<a href="{{ url('student/edit/grade') }}" style="font-size: 1.25em;"><span class="label label-warning" ><i class="fa fa-pencil"></i> Perbarui Kelas</span></a>
					</div>
				</div>
				<div class="box-body">
					<h4>Total kelas mendapatkan mata pelajaran: <strong>7 kelas</strong></h4>
					
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Nama Kelas</th>
								<th>Wali Kelas</th>
								<th>Konsentrasi Kelas</th>
								<th>Jumlah Siswa</th>
								<th>Rata-rata mapel kelas</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>X-9</td>
								<td>Sri Rahayuningsih, S.Pd.</td>
								<td>Belum konsentrasi</td>
								<td>43</td>
								<td>84.5</td>
							</tr>
							<tr>
								<td>X-7</td>
								<td>Sri Rahayuningsih, S.Pd.</td>
								<td>Belum konsentrasi</td>
								<td>43</td>
								<td>84.5</td>
							</tr>
							<tr>
								<td>X-5</td>
								<td>Sri Rahayuningsih, S.Pd.</td>
								<td>Belum konsentrasi</td>
								<td>43</td>
								<td>84.5</td>
							</tr>
							<tr>
								<td>X-6</td>
								<td>Sri Rahayuningsih, S.Pd.</td>
								<td>Belum konsentrasi</td>
								<td>43</td>
								<td>84.5</td>
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
					<h3 class="box-title">Guru yang melakukan pengajaran</h3>
					<div class="box-tools pull-right">
						<a href="{{ url('student/edit/grade') }}" style="font-size: 1.25em;"><span class="label label-warning" ><i class="fa fa-pencil"></i> Perbarui Guru</span></a>
					</div>
				</div>
				<div class="box-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>NIP</th>
								<th>Nama</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>1981 0921 2014 04 1001</td>
								<td>Raditya Chandra Buana, S.T.</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
