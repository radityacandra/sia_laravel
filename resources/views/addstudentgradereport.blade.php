@extends('layouts.app')

@section('htmlheader_title')
	Edit Rapot Siswa
@endsection

@section('contentheader_title')
	Edit Raport Siswa
@endsection

@section('contentheader_description')
	Input nilai rapot siswa SMA N 1 Salatiga
@endsection

@section('main-content')
	<div class="row">
		<div class="col-md-12">
			<div class="box box-solid box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Nilai Akademik Rapot Siswa</h3>
				</div>
				<div class="box-body">
					<h4>Semester 1</h4>
					<table class="table table-striped table-hover">
						<tbody>
						<tr>
							<td class="col-md-5">Matematika Kelas X</td>
							<td class="col-md-4">3 Jam Pelajaran</td>
							<td class="col-md-3"><input type="text" class="form-control" value="92"></td>
						</tr>
						<tr>
							<td class="col-md-5">Matematika Kelas X</td>
							<td class="col-md-4">3 Jam Pelajaran</td>
							<td class="col-md-3"><input type="text" class="form-control" value="92"></td>
						</tr>
						<tr>
							<td class="col-md-5">Matematika Kelas X</td>
							<td class="col-md-4">3 Jam Pelajaran</td>
							<td class="col-md-3"><input type="text" class="form-control" value="92"></td>
						</tr>
						</tbody>
					</table>
					
					<h4>Semester 2</h4>
					<table class="table table-striped table-hover">
						<tbody>
						<tr>
							<td class="col-md-5">Matematika Kelas X</td>
							<td class="col-md-4">3 Jam Pelajaran</td>
							<td class="col-md-3"><input type="text" class="form-control" value="92"></td>
						</tr>
						<tr>
							<td class="col-md-5">Matematika Kelas X</td>
							<td class="col-md-4">3 Jam Pelajaran</td>
							<td class="col-md-3"><input type="text" class="form-control" value="92"></td>
						</tr>
						<tr>
							<td class="col-md-5">Matematika Kelas X</td>
							<td class="col-md-4">3 Jam Pelajaran</td>
							<td class="col-md-3"><input type="text" class="form-control" value="92"></td>
						</tr>
						</tbody>
					</table>
					
					<h4>Semester 3</h4>
					<table class="table table-striped table-hover">
						<tbody>
						<tr>
							<td class="col-md-5">Matematika Kelas X</td>
							<td class="col-md-4">3 Jam Pelajaran</td>
							<td class="col-md-3"><input type="text" class="form-control" placeholder="Belum dimasukkan"></td>
						</tr>
						<tr>
							<td class="col-md-5">Matematika Kelas X</td>
							<td class="col-md-4">3 Jam Pelajaran</td>
							<td class="col-md-3"><input type="text" class="form-control" placeholder="Belum dimasukkan"></td>
						</tr>
						<tr>
							<td class="col-md-5">Matematika Kelas X</td>
							<td class="col-md-4">3 Jam Pelajaran</td>
							<td class="col-md-3"><input type="text" class="form-control" placeholder="Belum dimasukkan"></td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="box box-solid box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Nilai Non Akademik Rapot Siswa</h3>
				</div>
				<div class="box-body">
					<h4>Semester 1</h4>
					<table class="table table-striped table-hover">
						<tbody>
						<tr>
							<td class="col-md-3">Kebersihan</td>
							<td class="col-md-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
							<td class="col-md-2">
								<select class="form-control">
									<option>A</option>
									<option>B</option>
									<option>C</option>
									<option>D</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="col-md-3">Kedisiplinan</td>
							<td class="col-md-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
							<td class="col-md-2">
								<select class="form-control">
									<option>A</option>
									<option>B</option>
									<option>C</option>
									<option>D</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="col-md-3">Keaktifan</td>
							<td class="col-md-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
							<td class="col-md-2">
								<select class="form-control">
									<option>A</option>
									<option>B</option>
									<option>C</option>
									<option>D</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="col-md-3">Tidak Masuk</td>
							<td class="col-md-7">Sakit</td>
							<td class="col-md-2">
								<div class="input-group">
									<input type="text" class="form-control" aria-describedby="sakit" placeholder="0">
									<span class="input-group-addon" id="sakit">Hari</span>
								</div>
							</td>
						</tr>
						<tr>
							<td class="col-md-3">Tidak Masuk</td>
							<td class="col-md-7">Ijin</td>
							<td class="col-md-2">
								<div class="input-group">
									<input type="text" class="form-control" aria-describedby="sakit" placeholder="0">
									<span class="input-group-addon" id="sakit">Hari</span>
								</div>
							</td>
						</tr>
						<tr>
							<td class="col-md-3">Tidak Masuk</td>
							<td class="col-md-7">Alpa</td>
							<td class="col-md-2">
								<div class="input-group">
									<input type="text" class="form-control" aria-describedby="sakit" placeholder="0">
									<span class="input-group-addon" id="sakit">Hari</span>
								</div>
							</td>
						</tr>
						</tbody>
					</table>
					
					<h4>Semester 2</h4>
					<table class="table table-striped table-hover">
						<tbody>
						<tr>
							<td class="col-md-3">Kebersihan</td>
							<td class="col-md-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
							<td class="col-md-2">
								<select class="form-control">
									<option>A</option>
									<option>B</option>
									<option>C</option>
									<option>D</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="col-md-3">Kedisiplinan</td>
							<td class="col-md-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
							<td class="col-md-2">
								<select class="form-control">
									<option>A</option>
									<option>B</option>
									<option>C</option>
									<option>D</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="col-md-3">Keaktifan</td>
							<td class="col-md-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
							<td class="col-md-2">
								<select class="form-control">
									<option>A</option>
									<option>B</option>
									<option>C</option>
									<option>D</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="col-md-3">Tidak Masuk</td>
							<td class="col-md-7">Sakit</td>
							<td class="col-md-2">
								<div class="input-group">
									<input type="text" class="form-control" aria-describedby="sakit" placeholder="0">
									<span class="input-group-addon" id="sakit">Hari</span>
								</div>
							</td>
						</tr>
						<tr>
							<td class="col-md-3">Tidak Masuk</td>
							<td class="col-md-7">Ijin</td>
							<td class="col-md-2">
								<div class="input-group">
									<input type="text" class="form-control" aria-describedby="sakit" placeholder="0">
									<span class="input-group-addon" id="sakit">Hari</span>
								</div>
							</td>
						</tr>
						<tr>
							<td class="col-md-3">Tidak Masuk</td>
							<td class="col-md-7">Alpa</td>
							<td class="col-md-2">
								<div class="input-group">
									<input type="text" class="form-control" aria-describedby="sakit" placeholder="0">
									<span class="input-group-addon" id="sakit">Hari</span>
								</div>
							</td>
						</tr>
						</tbody>
					</table>
					
					<h4>Semester 3</h4>
					<table class="table table-striped table-hover">
						<tbody>
						<tr>
							<td class="col-md-3">Kebersihan</td>
							<td class="col-md-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
							<td class="col-md-2">
								<select class="form-control">
									<option>A</option>
									<option>B</option>
									<option>C</option>
									<option>D</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="col-md-3">Kedisiplinan</td>
							<td class="col-md-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
							<td class="col-md-2">
								<select class="form-control">
									<option>A</option>
									<option>B</option>
									<option>C</option>
									<option>D</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="col-md-3">Keaktifan</td>
							<td class="col-md-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
							<td class="col-md-2">
								<select class="form-control">
									<option>A</option>
									<option>B</option>
									<option>C</option>
									<option>D</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="col-md-3">Tidak Masuk</td>
							<td class="col-md-7">Sakit</td>
							<td class="col-md-2">
								<div class="input-group">
									<input type="text" class="form-control" aria-describedby="sakit" placeholder="0">
									<span class="input-group-addon" id="sakit">Hari</span>
								</div>
							</td>
						</tr>
						<tr>
							<td class="col-md-3">Tidak Masuk</td>
							<td class="col-md-7">Ijin</td>
							<td class="col-md-2">
								<div class="input-group">
									<input type="text" class="form-control" aria-describedby="sakit" placeholder="0">
									<span class="input-group-addon" id="sakit">Hari</span>
								</div>
							</td>
						</tr>
						<tr>
							<td class="col-md-3">Tidak Masuk</td>
							<td class="col-md-7">Alpa</td>
							<td class="col-md-2">
								<div class="input-group">
									<input type="text" class="form-control" aria-describedby="sakit" placeholder="0">
									<span class="input-group-addon" id="sakit">Hari</span>
								</div>
							</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
