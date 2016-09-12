@extends('layouts.app')

@section('htmlheader_title')
	Tambah Kelas
@endsection

@section('contentheader_title')
	Tambah Kelas
@endsection

@section('contentheader_description')
	Tambah data kelas aktif SMA N 1 Salatiga
@endsection

@section('main-content')
	<form class="form-horizontal" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Data Kelas Aktif</h3>
					</div>
					<div class="box-body">
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Kode Kelas</label>
							</div>
							<div class="col-md-5">
								<input type="text" name="kode_kelas" class="form-control" placeholder="Masukkan kode kelas">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label" for="nama_kelas">Nama Kelas</label>
							</div>
							<div class="col-md-5">
								<input type="text" name="nama_kelas" class="form-control" placeholder="Masukkan nama kelas">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label" for="konsentrasi">Konsentrasi Kelas</label>
							</div>
							<div class="col-md-5">
								<select class="form-control konsentrasi" name="konsentrasi">
									@foreach($viewData['list_consentration'] as $consentration)
										<option value="{{ $consentration->consentration_id }}">{{ $consentration->consentration_name }}</option>
									@endforeach
								</select>
								
								<script type="text/javascript">
									$(".konsentrasi").select2();
								</script>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Mata Pelajaran Diajarkan</h3>
					</div>
					<div class="box-body">
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label" for="mapel">Pilih Mata Pelajaran</label>
							</div>
							<div class="col-md-5">
								<select class="form-control mapel" multiple name="mapel[]">
									@foreach($viewData['list_subject'] as $subject)
										<option value="{{ $subject->code_subject }}">{{ $subject->subject_name }}</option>
									@endforeach
								</select>
								
								<script type="text/javascript">
									$(".mapel").select2();
								</script>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Siswa Kelas</h3>
					</div>
					<div class="box-body">
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label" for="students">Pilih Siswa</label>
							</div>
							<div class="col-md-5">
								<select class="form-control students" multiple name="students[]">
									@foreach($viewData['list_student'] as $student)
										<option value="{{ $student->NIM }}">{{ $student->full_name }}</option>
									@endforeach
								</select>
								
								<script type="text/javascript">
									$(".students").select2();
								</script>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Wali Kelas</h3>
					</div>
					<div class="box-body">
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label" for="hometeacher">Pilih Wali Kelas</label>
							</div>
							<div class="col-md-5">
								<select class="form-control hometeacher" name="teacher" title="Pilih wali kelas...">
									@foreach($viewData['list_teacher'] as $teacher)
										<option value="{{ $teacher->NIP }}">{{ $teacher->full_name }}</option>
									@endforeach
								</select>
								
								<script type="text/javascript">
									$(".hometeacher").select2();
								</script>
							</div>
						</div>
						
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						
						<div class="form-group">
							<div class="col-md-2 col-md-offset-8">
								<button type="submit" class="btn btn-primary col-md-12">Tambah Kelas</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
@endsection