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
					<form class="form-horizontal" method="get">
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Cari Berdasar Nama</label>
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control" name="teacher_name" placeholder="masukkan nama guru" value="{{ old('teacher_name') }}">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Cari Berdasar NIP</label>
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control" name="teacher_nip" placeholder="masukkan NIP guru" value="{{ old('teacher_nip') }}">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Status</label>
							</div>
							<div class="col-md-5">
								<select class="form-control" name="status">
									<option value="guru">Guru</option>
									<option value="wali">Wali Kelas</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Urutkan Berdasarkan</label>
							</div>
							<div class="col-md-3">
								<select class="form-control" name="sortoption">
									<option value="NIP">NIP</option>
									<option value="full_name">Nama</option>
									<option value="status">Status</option>
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
							<th>NIP</th>
							<th>Nama Lengkap</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						
						@foreach($viewData['list_teacher'] as $teacher)
							<tr>
								<td>{{ $teacher->NIP }}</td>
								<td>{{ $teacher->full_name }}</td>
								<td><label class="label label-info">{{ $teacher->status }}</label></td>
								<td>
									<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
									<a class="btn btn-default" href="{{ url('teacher/detail/'.$teacher->NIP) }}"><i class="fa fa-info"></i> Lihat Detail</a>
									<a class="btn btn-default"><i class="fa fa-trash"></i> Hapus</a>
								</td>
							</tr>
						@endforeach
						
						</tbody>
					</table>
					
					<div style="float:right">
						{{ $viewData['list_teacher']->render() }}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection