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
						<div class="col-md-4 col-sm-6"><h3>Nama Mata Pelajaran</h3></div><div class="col-md-8 col-sm-6"><h3>: {{ $viewData['detail_subject']->subject_name }}</h3></div>
						<div class="col-md-4 col-sm-6"><h3>Kode Mata Pelajaran</h3></div><div class="col-md-8 col-sm-6"><h3>: {{ $viewData['detail_subject']->code_subject }}</h3></div>
						<div class="col-md-4 col-sm-6"><h3>Bobot Mata Pelajaran</h3></div><div class="col-md-8 col-sm-6"><h3>: {{ $viewData['detail_subject']->subject_weight }} Jam Pelajaran</h3></div>
						<div class="col-md-4 col-sm-6"><h3>Konsentrasi</h3></div><div class="col-md-8 col-sm-6"><h3>: {{ $viewData['detail_subject']->detailConsentration->consentration_name }}</h3></div>
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
					<h4>Total kelas mendapatkan mata pelajaran: <strong>{{ sizeof($viewData['teached_in_class']) }} kelas</strong></h4>
					
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
						
						@foreach($viewData['teached_in_class'] as $class)
							<tr>
								<td>{{ $class->class_name }}</td>
								<td>{{ $class->hasHometeacher->full_name }}</td>
								<td>{{ $class->detailConsentration->consentration_name }}</td>
								<td>{{ sizeof($class->memberStudent) }}</td>
								<td>84.5</td>
							</tr>
						@endforeach
							
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
						
						@foreach($viewData['teached_by_teacher'] as $teacher)
							<tr>
								<td>{{ $teacher->NIP }}</td>
								<td>{{ $teacher->full_name }}</td>
							</tr>
						@endforeach
						
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
