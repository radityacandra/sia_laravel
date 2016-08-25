@extends('layouts.app')

@section('htmlheader_title')
	Tambah Data Siswa
@endsection

@section('contentheader_title')
	Tambah Siswa
@endsection

@section('contentheader_description')
	Tambah data siswa baru SMA N 1 Salatiga
@endsection

@section('main-content')
	<form class="form-horizontal">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Profil Siswa</h3>
					</div>
					<div class="box-body">
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Nama Lengkap Siswa</label>
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control" name="student_name" placeholder="masukkan nama siswa">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Foto Siswa</label>
							</div>
							<div class="col-md-5">
								<input type="file" class="form-control" name="student_picture">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Tempat Lahir</label>
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control" name="birth_place" placeholder="masukkan tempat lahir siswa">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Tanggal Lahir</label>
							</div>
							<div class="col-md-5">
								<input type="date" class="form-control" name="birth_place" placeholder="masukkan tempat lahir siswa">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Nomor Telepon Siswa</label>
							</div>
							<div class="col-md-5">
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon">+62</span>
									<input type="text" class="form-control" name="birth_place" placeholder="masukkan tempat lahir siswa" aria-describedby="basic-addon">
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Nama Ayah</label>
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control" name="student_name" placeholder="masukkan nama orang tua">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Nama Ibu</label>
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control" name="student_name" placeholder="masukkan nama orang tua">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Nomor Telepon Orang Tua</label>
							</div>
							<div class="col-md-5">
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon">+62</span>
									<input type="text" class="form-control" name="birth_place" placeholder="masukkan tempat lahir siswa" aria-describedby="basic-addon">
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
								<input type="date" class="form-control" name="birth_place">
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
						<h3 class="box-title">Relasi Kelas Siswa</h3>
					</div>
					<div class="box-body">
						<div class="form-group">
							<div class="col-md-5">
								<label class="control-label">Kelas</label>
							</div>
							<div class="col-md-5">
								<select class="form-control" name="class">
									<option>X-1</option>
									<option>X-2</option>
									<option>X-3</option>
									<option>X-4</option>
									<option>X-5</option>
									<option>XI IA-1</option>
								</select>
							</div>
						</div>
						
						<div class="col-md-12" style="margin-top:1%; display:none;">
							<div class="callout callout-info lead">
								<h4>Informasi Kelas</h4>
								<p>Siswa ke-30 yang dimasukkan. Sisa tempat duduk: 7 kursi. Kapasitas kelas: 40 kursi</p>
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
