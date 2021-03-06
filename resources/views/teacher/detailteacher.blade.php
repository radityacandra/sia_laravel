@extends('layouts.app')

@section('htmlheader_title')
	Detail Guru
@endsection

@section('contentheader_title')
	Detail Guru
@endsection

@section('contentheader_description')
	Data detail guru SMA N 1 Salatiga
@endsection

@section('main-content')
	<div class="row">
		<div class="col-md-12">
			<div class="box box-solid box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Informasi Siswa</h3>
				</div>
				<div class="box-body">
					<div class="col-md-4 col-sm-12">
						<img src="{{ $viewData['teacher_profile']->teacher_picture }}" class="col-md-12" alt="pas foto">
					</div>
					<div class="col-md-8">
						<div class="col-md-4 col-sm-6"><h3>Nama</h3></div><div class="col-md-8 col-sm-6"><h3>: {{ $viewData['teacher_profile']->full_name }}</h3></div>
						<div class="col-md-4 col-sm-6"><h3>NIP</h3></div><div class="col-md-8 col-sm-6"><h3>: {{ $viewData['teacher_profile']->NIP }}</h3></div>
						<div class="col-md-4 col-sm-6"><h3>Status</h3></div><div class="col-md-8 col-sm-6"><h3>: {{ $viewData['teacher_profile']['status'] }}</h3></div>
						<div class="col-md-6 col-sm-6" style="margin-top:20px;"><a class="btn btn-primary col-md-12 col-sm-12">Jadikan Guru</a></div>
						<div class="col-md-6 col-sm-6" style="margin-top:20px;"><a class="btn btn-primary col-md-12 col-sm-12">Jadikan Wali Kelas</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="box box-solid box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Data Wali Kelas</h3>
					<div class="box-tools pull-right">
						<a href="{{ url('student/edit/grade') }}" style="font-size: 1.25em;"><span class="label label-warning" ><i class="fa fa-pencil"></i> Perbarui Data</span></a>
					</div>
				</div>
				<div class="box-body">
					@if(isset($viewData['class_info']))
						<h4>Saat ini menjabat wali kelas <strong>{{ $viewData['class_info']['name'] }}</strong></h4>
						<h4>Konsentrasi kelas: {{ $viewData['class_info']['consentration'] }}</h4>
						<h4>Rata-rata kelas: 82,3 <a href="#">Lihat detail >></a></h4>
						<h4>Jumlah siswa: {{ $viewData['class_info']['total_student'] }} orang <a href="#">Lihat detail >></a></h4>
					@else
						<h3>Tidak sedang menjabat sebagai Wali Kelas</h3>
					@endif
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="box box-solid box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Data Pengajaran</h3>
					<div class="box-tools pull-right">
						<a href="{{ url('student/edit/grade') }}" style="font-size: 1.25em;"><span class="label label-warning" ><i class="fa fa-pencil"></i> Perbarui Data</span></a>
					</div>
				</div>
				<div class="box-body">
					<h4>Mengajar {{ sizeof($viewData['teaching_subject']) }} mata pelajaran</h4>

					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Kode Mapel</th>
								<th>Nama Mapel</th>
								<th>Jumlah Kelas</th>
								<th>Jumlah Jam</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
						
						@foreach($viewData['teaching_subject'] as $subject)
							<tr>
								<td>{{ $subject->code_subject }}</td>
								<td>{{ $subject->subject_name }}</td>
								<td>7 Kelas</td>
								<td>21 Jam</td>
								<td>
									<a class="btn btn-primary" href="{{ url('mapel/detail') }}">Lihat Mapel</a>
									<a class="btn btn-primary">Masukkan Nilai</a>
								</td>
							</tr>
						@endforeach
						
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
