@extends('layouts.app')

@section('htmlheader_title')
	Tambah Data Guru
@endsection

@section('contentheader_title')
	Tambah Guru
@endsection

@section('contentheader_description')
	Tambah data guru baru SMA N 1 Salatiga
@endsection

@section('main-content')
	<form class="form-horizontal">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Profil Guru</h3>
					</div>
					<div class="box-body">

						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">NIP Guru</label>
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control" name="teacher_nip" placeholder="masukkan NIP guru">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Nama Lengkap Guru</label>
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control" name="teacher_name" placeholder="masukkan nama guru">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Foto Guru</label>
							</div>
							<div class="col-md-5">
								<input type="file" class="form-control" name="teacher_picture">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Tempat Lahir</label>
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control" name="birth_place" placeholder="masukkan tempat lahir guru">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Tanggal Lahir</label>
							</div>
							<div class="col-md-5">
								<input type="date" class="form-control" name="birth_date">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Nomor Telepon Guru</label>
							</div>
							<div class="col-md-5">
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon">+62</span>
									<input type="text" class="form-control" name="phone_numb" placeholder="nomor telepon" aria-describedby="basic-addon">
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Nama Ayah</label>
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control" name="father_name" placeholder="masukkan nama orang tua">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Nama Ibu</label>
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control" name="mother_name" placeholder="masukkan nama orang tua">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Nomor Telepon Orang Tua</label>
							</div>
							<div class="col-md-5">
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon">+62</span>
									<input type="text" class="form-control" name="parent_phone" placeholder="nomor telepon" aria-describedby="basic-addon">
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Alamat Rumah</label>
							</div>
							<div class="col-md-5">
								<textarea rows="3" class="form-control" name="address"></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Tanggal Bergabung</label>
							</div>
							<div class="col-md-5">
								<input type="date" class="form-control" name="join_date">
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
						<h3 class="box-title">Pengajaran Guru</h3>
					</div>
					<div class="box-body">
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Nama Mata Pelajaran 1</label>
							</div>
							<div class="col-md-5">
								<input type="text" name="mapel" id="mapel" class="form-control" placeholder="masukkan kata kunci">
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-10">
								<button class="btn btn-primary" style="float:right;">Tambah Mata Pelajaran</button>
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
						<h3 class="box-title">Relasi Mata Pelajaran</h3>
					</div>
					<div class="box-body">
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Konsentrasi Siswa</label>
							</div>
							<div class="col-md-5">
								<select class="form-control" name="class">
									<option>Belum mengambil konsentrasi</option>
									<option>Ilmu Pengetahuan Alam</option>
									<option>Ilmu Pengetahuan Sosial</option>
									<option>Bahasa</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-3 col-md-offset-5">
								<button type="submit" class="col-md-10 btn btn-primary"><i class="fa fa-user"></i> masukkan Data</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
@endsection
