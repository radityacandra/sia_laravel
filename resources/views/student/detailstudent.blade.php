@extends('layouts.app')

@section('htmlheader_title')
	Detail Siswa
@endsection

@section('contentheader_title')
	Detail Siswa
@endsection

@section('contentheader_description')
	Data detail siswa SMA N 1 Salatiga
@endsection

@section('main-content')
	<div class="row">
		<div class="col-md-12">
			<div class="box box-solid box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Informasi Siswa</h3>
				</div>
				<div class="box-body">
					<div class="col-md-4">
						<img src="{{ $viewData['student_profile']->student_picture }}" class="col-md-12" alt="pas foto">
					</div>
					<div class="col-md-8">
						<div class="col-md-4 col-sm-6"><h3>Nama</h3></div><div class="col-md-8 col-sm-6"><h3>: {{ $viewData['student_profile']->full_name }}</h3></div>
						<div class="col-md-4 col-sm-6"><h3>NIS</h3></div><div class="col-md-8 col-sm-6"><h3>: {{ $viewData['student_profile']->NIM }}</h3></div>
						<div class="col-md-4 col-sm-6"><h3>Kelas</h3></div><div class="col-md-8 col-sm-6"><h3>: {{ $viewData['student_profile']->detailClass->class_name }}</h3></div>
						<div class="col-md-4 col-sm-6"><h3>Konsentrasi</h3></div><div class="col-md-8 col-sm-6"><h3>: Ilmu Pengetahuan Alam</h3></div>
						<div class="col-md-4 col-sm-6"><h3>Ranking Kelas</h3></div><div class="col-md-8 col-sm-6"><h3>: 4</h3></div>
						<div class="col-md-4 col-sm-6"><h3>Ranking Sekolah</h3></div><div class="col-md-8 col-sm-6"><h3>: 9</h3></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="box box-solid box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Nilai Akademik</h3>
					<div class="box-tools pull-right">
						<a href="#" style="font-size: 1.25em;"><span class="label label-success" ><i class="fa fa-eye"></i> Lihat Grafik Nilai</span></a>
						<a href="{{ url('student/edit/grade') }}" style="font-size: 1.25em;"><span class="label label-warning" ><i class="fa fa-pencil"></i> Masukkan Nilai</span></a>
					</div>
				</div>
				<div class="box-body">
					<ul class="nav nav-tabs">
						<?php $counter = 0; ?>
						@foreach($viewData['array_semester'] as $value)
							@if($counter == 0)
								<li role="presentation" class="active"><a href="#{{ $value }}" data-toggle="tab">{{ $value }}</a></li>
							@else
								<li role="presentation"><a href="#{{ $value }}" data-toggle="tab">{{ $value }}</a></li>
							@endif
							<?php $counter++; ?>
						@endforeach
					</ul>
					
					<div class="tab-content">
						
						<?php $counter = 0; ?>
						@foreach($viewData['array_mapel'] as $listMapel)
							@if($counter == 0)
									<div id="semester{{ $counter+1 }}" class="tab-pane fade in active">
										<table class="table table-striped table-hover">
											<thead>
											<tr>
												<th>Kode Mapel</th>
												<th>Nama Mapel</th>
												<th>Bobot Mapel</th>
												<th>Nilai</th>
												<th>Action</th>
											</tr>
											</thead>
											<tbody>
											
											@foreach($listMapel as $mapel)
												<tr>
													<td>{{ $mapel['code'] }}</td>
													<td>{{ $mapel['name'] }}</td>
													<td>{{ $mapel['weight'] }}</td>
													<td>{{ $mapel['grade'] }}</td>
													<td>
														<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
													</td>
												</tr>
											@endforeach
											
											</tbody>
										</table>
										<div class="col-md-5"><h4><strong>Rata-rata semester 1</strong></h4></div><div class="col-md-3"><h4><strong>: 91.1</strong></h4></div>
										<div class="col-md-5"><h4><strong>Rata-rata Kumulatif</strong></h4></div><div class="col-md-3"><h4><strong>: 93.2</strong></h4></div>
									</div>
							@else
								<li role="presentation"><a href="#{{ $value }}" data-toggle="tab">{{ $value }}</a></li>
									<div id="semester{{ $counter+1 }}" class="tab-pane fade">
										<table class="table table-striped table-hover">
											<thead>
											<tr>
												<th>Kode Mapel</th>
												<th>Nama Mapel</th>
												<th>Bobot Mapel</th>
												<th>Nilai</th>
												<th>Action</th>
											</tr>
											</thead>
											<tbody>
											
											@foreach($listMapel as $mapel)
												<tr>
													<td>{{ $mapel['code'] }}</td>
													<td>{{ $mapel['name'] }}</td>
													<td>{{ $mapel['weight'] }}</td>
													<td>{{ $mapel['grade'] }}</td>
													<td>
														<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
													</td>
												</tr>
											@endforeach
											
											</tbody>
										</table>
									</div>
							@endif
							<?php $counter++; ?>
						@endforeach
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="box box-solid box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Nilai Non Akademik</h3>
					<div class="box-tools pull-right">
						<a href="{{ url('student/edit/grade') }}" style="font-size: 1.25em;"><span class="label label-warning" ><i class="fa fa-pencil"></i> Masukkan Nilai</span></a>
					</div>
				</div>
				<div class="box-body">
					<ul class="nav nav-tabs">
						<li role="presentation" class="active"><a href="#nasemester1" data-toggle="tab">Semester 1</a></li>
						<li role="presentation"><a href="#nasemester2" data-toggle="tab">Semester 2</a></li>
						<li role="presentation"><a href="#nasemester3" data-toggle="tab">Semester 3</a></li>
					</ul>
					
					<div class="tab-content">
						<div id="nasemester1" class="tab-pane fade in active">
							<table class="table table-striped table-hover">
								<thead>
								<tr>
									<th>No.</th>
									<th>Aspek Penilaian</th>
									<th>Deskripsi</th>
									<th>Penilaian</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>1</td>
									<td>Kebersihan</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
									<td>B</td>
									<td>
										<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
									</td>
								</tr>
								
								<tr>
									<td>2</td>
									<td>Kedisiplinan</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
									<td>A</td>
									<td>
										<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
									</td>
								</tr>
								
								<tr>
									<td>3</td>
									<td>Keuletan</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
									<td>B</td>
									<td>
										<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
						<div id="nasemester2" class="tab-pane fade">
							<table class="table table-striped table-hover">
								<thead>
								<tr>
									<th>No.</th>
									<th>Aspek Penilaian</th>
									<th>Deskripsi</th>
									<th>Penilaian</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>1</td>
									<td>Kebersihan</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
									<td>B</td>
									<td>
										<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
									</td>
								</tr>
								
								<tr>
									<td>2</td>
									<td>Kedisiplinan</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
									<td>A</td>
									<td>
										<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
									</td>
								</tr>
								
								<tr>
									<td>3</td>
									<td>Keuletan</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
									<td>B</td>
									<td>
										<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
						<div id="nasemester3" class="tab-pane fade">
							<table class="table table-striped table-hover">
								<thead>
								<tr>
									<th>No.</th>
									<th>Aspek Penilaian</th>
									<th>Deskripsi</th>
									<th>Penilaian</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>1</td>
									<td>Kebersihan</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
									<td>B</td>
									<td>
										<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
									</td>
								</tr>
								
								<tr>
									<td>2</td>
									<td>Kedisiplinan</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
									<td>A</td>
									<td>
										<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
									</td>
								</tr>
								
								<tr>
									<td>3</td>
									<td>Keuletan</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
									<td>B</td>
									<td>
										<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
									</td>
								</tr>
								
								<tr>
									<td>4</td>
									<td>Ijin</td>
									<td>Sakit</td>
									<td>(B) 3 hari</td>
									<td>
										<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
									</td>
								</tr>
								
								<tr>
									<td>5</td>
									<td>Ijin</td>
									<td>Kepentingan Keluarga</td>
									<td>(B) 3 hari</td>
									<td>
										<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
									</td>
								</tr>
								
								<tr>
									<td>6</td>
									<td>Ijin</td>
									<td>Alpa</td>
									<td>(A) 0 hari</td>
									<td>
										<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
@endsection
