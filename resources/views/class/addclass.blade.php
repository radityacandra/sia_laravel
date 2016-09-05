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
	<form class="form-horizontal">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Data Mata Pelajaran</h3>
					</div>
					<div class="box-body">
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Kode Mapel</label>
							</div>
							<div class="col-md-5">
								<input type="text" name="kode_mapel" class="form-control" placeholder="Masukkan kode mapel">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Nama Mapel</label>
							</div>
							<div class="col-md-5">
								<input type="text" name="nama_mapel" class="form-control" placeholder="Masukkan nama mapel">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Bobot Mapel</label>
							</div>
							<div class="col-md-3">
								<div class="input-group">
									<input type="text" class="form-control" name="bobot" aria-describedby="basic-addon" placeholder="angka">
									<span class="input-group-addon" id="basic-addon">Jam Pelajaran</span>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Konsentrasi</label>
							</div>
							<div class="col-md-5">
								<input type="text" name="konsentrasi" class="form-control" placeholder="Konsentrasi mapel">
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
						<h3 class="box-title">Guru Pengajar</h3>
					</div>
					<div class="box-body">
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">NIM Guru</label>
							</div>
							<div class="col-md-5">
								<input type="text" name="nip" class="form-control" placeholder="Masukkan NIP guru">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Nama Guru</label>
							</div>
							<div class="col-md-5">
								<input type="text" name="nama_guru" class="form-control" value="Raditya Chandra Buana" disabled>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Tanggal Bergabung</label>
							</div>
							<div class="col-md-5">
								<input type="text" name="tanggal_gabung" class="form-control" value="17 April 2015" disabled>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Jam Mengajar Saat Ini</label>
							</div>
							<div class="col-md-3">
								<div class="input-group">
									<input type="text" class="form-control" name="bobot" aria-describedby="basic-addon" value="17" disabled>
									<span class="input-group-addon" id="basic-addon">Jam Pelajaran</span>
								</div>
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
						<h3 class="box-title">Kelas Mendapatkan Mata Pelajaran</h3>
					</div>
					<div class="box-body">
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Kelas</label>
							</div>
							<div class="col-md-5">
								<select class="selectpicker form-control" multiple title="Pilih kelas...">
									<option>X-1</option>
									<option>X-2</option>
									<option>X-3</option>
									<option>X-4</option>
									<option>X-5</option>
									<option>X-6</option>
									<option>X-7</option>
									<option>X-8</option>
									<option>X-9</option>
									<option>X-10</option>
								</select>
							</div>
						</div>
						<h3>Kelas dipilih: 13 Kelas</h3>
						
						<div class="form-group">
							<div class="col-md-2 col-md-offset-8">
								<button type="submit" class="btn btn-primary col-md-12">Tambah Mapel</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
@endsection