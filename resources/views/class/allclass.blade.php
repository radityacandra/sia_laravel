@extends('layouts.app')

@section('htmlheader_title')
	Semua Kelas
@endsection

@section('contentheader_title')
	Semua Kelas
@endsection

@section('contentheader_description')
	Data semua kelas aktif SMA N 1 Salatiga
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
								<label class="control-label">Cari Kelas</label>
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control" name="class_name" placeholder="masukkan nama kelas">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Filter Konsentrasi</label>
							</div>
							<div class="col-md-5">
								<select name="consentration" class="form-control">
									<option>Belum Konsentrasi</option>
									<option>Ilmu Pengetahuan Alam</option>
									<option>Ilmu Pengetahuan Sosial</option>
									<option>Sastra dan Bahasa</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Urutkan Berdasarkan</label>
							</div>
							<div class="col-md-3">
								<select class="form-control" name="class">
									<option>Nama Kelas</option>
									<option>Konsentrasi Kelas</option>
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
							<th>Kode Kelas</th>
							<th>Nama Kelas</th>
							<th>Konsentrasi Kelas</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						
						@foreach($viewData['list_class'] as $class)
							<tr>
								<td>{{ $class->class_id }}</td>
								<td>{{ $class->class_name }}</td>
								<td>{{ $class->detailConsentration->consentration_name }}</td>
								<td>
									<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
									<a class="btn btn-default" href="{{ url('class/detail/'. $class->class_id) }}"><i class="fa fa-info"></i> Lihat Detail</a>
									<a class="btn btn-default"><i class="fa fa-trash"></i> Hapus</a>
								</td>
							</tr>
						@endforeach
						
						</tbody>
					</table>
					
					<div style="float: right;">
						{{ $viewData['list_class']->render() }}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
