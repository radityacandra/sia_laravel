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
					<form class="form-horizontal" method="get">
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Cari Berdasar Nama</label>
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control" name="student_name" placeholder="masukkan nama siswa" value="{{ old('student_name') }}">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Cari Berdasar NIM</label>
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control" name="student_nim" placeholder="masukkan NIM siswa" value="{{ old('student_nim') }}">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Cari Berdasar Kelas</label>
							</div>
							<div class="col-md-5">
								<select class="form-control class" name="class">
									<option value="">(Pilih Kelas)</option>
									@foreach($viewData['list_class'] as $class)
										<option value="{{ $class->class_id }}">{{ $class->class_name }}</option>
									@endforeach
								</select>
								
								<script type="text/javascript">
									$(".class").select2();
								</script>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Urutkan Berdasarkan</label>
							</div>
							<div class="col-md-3">
								<select class="form-control" name="sortcolumn">
									<option value="NIM">NIM</option>
									<option value="full_name">Nama</option>
									<option value="current_class">Kelas</option>
									<option>Status</option>
								</select>
							</div>
							<div class="col-md-2">
								<select class="form-control" name="sort">
									<option value="asc">ASC</option>
									<option value="desc">DESC</option>
								</select>
							</div>
						</div>
						
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						
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
						
						@foreach($viewData['list_student'] as $student)
							<tr>
								<td>{{ $student->NIM }}</td>
								<td>{{ $student->full_name }}</td>
								<td>{{ $student->detailClass->class_name }}</td>
								<td><label class="label label-info">Aktif</label></td>
								<td>
									<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
									<a class="btn btn-default" href="{{ url('student/detail/'.$student->NIM) }}"><i class="fa fa-info"></i> Lihat Detail</a>
									<a class="btn btn-default"><i class="fa fa-trash"></i> Hapus</a>
								</td>
							</tr>
						@endforeach
						
						</tbody>
					</table>
					
					<div style="float: right">
						{{ $viewData['list_student']->render() }}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
