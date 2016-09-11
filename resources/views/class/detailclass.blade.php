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
						<div class="col-md-4 col-sm-6"><h3>Nama Kelas</h3></div><div class="col-md-8 col-sm-6"><h3>: {{ $viewData['class_profile']->class_name }}</h3></div>
						<div class="col-md-4 col-sm-6"><h3>Kode Kelas</h3></div><div class="col-md-8 col-sm-6"><h3>: {{ $viewData['class_profile']->class_id }}</h3></div>
						<div class="col-md-4 col-sm-6"><h3>Konsentrasi</h3></div><div class="col-md-8 col-sm-6"><h3>: {{ $viewData['class_profile']->detailConsentration->consentration_name }}</h3></div>
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
						
						@foreach($viewData['subjects'] as $subject)
							<tr>
								<td>{{ $subject->code_subject }}</td>
								<td>{{ $subject->subject_name }}</td>
								<td>{{ $subject->subject_weight }} Jam Pelajaran</td>
								<td>{{ $subject->teachedByTeacher[0]->full_name }}</td>
								<td><a class="btn btn-default" href="{{ url('mapel/detail/'. $subject->code_subject) }}"><i class="fa fa-eye"></i> Lihat Detail</a></td>
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
						
						@foreach($viewData['students'] as $student)
							<tr>
								<td>{{ $student->NIM }}</td>
								<td>{{ $student->full_name }}</td>
								<td><a class="btn btn-default" href="{{ url('student/detail/'. $student->NIM) }}"><i class="fa fa-eye"></i> Lihat Detail</a></td>
							</tr>
						@endforeach
						
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
