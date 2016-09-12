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
								<input type="text" class="form-control" name="mapel_name" placeholder="masukkan nama mata pelajaran" value="{{ old('mapel_name') }}">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Urutkan Berdasarkan</label>
							</div>
							<div class="col-md-3">
								<select class="form-control" name="sortoption">
									<option value="code_subject">Kode Mapel</option>
									<option value="subject_name">Nama Mata Pelajaran</option>
									<option value="subject_weight">Bobot</option>
									<option value="consentration_id">Konsentrasi</option>
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
								<th>Kode Mapel</th>
								<th>Nama Mata Pelajaran</th>
								<th>Bobot</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						
						@foreach($viewData['list_subject'] as $subject)
							<tr>
								<td>{{ $subject->code_subject }}</td>
								<td>{{ $subject->subject_name }}</td>
								<td>{{ $subject->subject_weight }} Jam Pelajaran</td>
								<td>
									<a class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
									<a class="btn btn-default" href="{{ url('mapel/detail/'.$subject->code_subject) }}"><i class="fa fa-info"></i> Lihat Detail</a>
									<a class="btn btn-default"><i class="fa fa-trash"></i> Hapus</a>
								</td>
							</tr>
						@endforeach
							
						</tbody>
					</table>
					
					<div style="float: right;">
						{{ $viewData['list_subject']->render() }}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
