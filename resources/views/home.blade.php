@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection

@section('contentheader_title')
	Home
@endsection

@section('contentheader_description')
	Test
@endsection

@section('main-content')
	<div class="row">
		<div class="col-md-3">
			<div class="info-box bg-green">
				<span class="info-box-icon"><i class="fa fa-check-circle"></i></span>
				<div class="info-box-content">
					<span class="info-box-text"><strong>Status Akademik</strong></span>
					<span class="info-box-text">Sedang berlangsung</span>
				</div>
			</div>
		</div>
		
		<div class="col-md-3">
			<div class="info-box">
				<span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
				<div class="info-box-content">
					<span class="info-box-text"><strong>Total Siswa</strong></span>
					<span class="info-box-number">1290 Siswa</span>
				</div>
			</div>
		</div>
		
		<div class="col-md-3">
			<div class="info-box">
				<span class="info-box-icon bg-blue"><i class="fa fa-building"></i></span>
				<div class="info-box-content">
					<span class="info-box-text"><strong>Total Kelas</strong></span>
					<span class="info-box-number">40 Kelas</span>
				</div>
			</div>
		</div>
		
		<div class="col-md-3">
			<div class="info-box">
				<span class="info-box-icon bg-blue-active"><i class="fa fa-user-md"></i></span>
				<div class="info-box-content">
					<span class="info-box-text"><strong>Total Guru</strong></span>
					<span class="info-box-number">50 Guru</span>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-6">
			<div class="box box-solid box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Informasi Diri</h3>
				</div>
				<div class="box-body">
					<div class="col-md-5">
						<img src="<?php echo url('img/user2-160x160.jpg'); ?>" class="col-md-12">
					</div>
					<div class="col-md-7">
						<h3>Raditya Chandra Buana</h3>
						<h5>Admin</h5>
						<h4>Terakhir Login: 17 April 2016</h4>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="box box-solid box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Catatan Saya</h3>
				</div>
				<div class="box-body">
					<ul>
						<li>28 Maret Akreditasi Sekolah</li>
						<li>Besok makan bakso bareng</li>
						<li>28 Maret Akreditasi Sekolah</li>
						<li>Besok makan bakso bareng</li>
					</ul>
					<div class="col-md-9">
						<input class="form-control" type="text" name="point" placeholder="Tambah catatan">
					</div>
					<div class="col-md-3">
						<button class="btn btn-default col-md-12">Kirim</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Siswa yang terakhir ditambahkan</h3>
				</div>
				<div class="box-body">
					<ul class="users-list clearfix">
						<li>
							<img src="{{ url('/img/user2-160x160.jpg') }}" alt="user image">
							<a class="users-list-name" href="#">Raditya Chandra Buana</a>
							<span class="users-list-date">Today</span>
						</li>
						<li>
							<img src="{{ url('/img/user2-160x160.jpg') }}" alt="user image">
							<a class="users-list-name" href="#">Raditya Chandra Buana</a>
							<span class="users-list-date">Today</span>
						</li>
						<li>
							<img src="{{ url('/img/user2-160x160.jpg') }}" alt="user image">
							<a class="users-list-name" href="#">Raditya Chandra Buana</a>
							<span class="users-list-date">Today</span>
						</li>
						<li>
							<img src="{{ url('/img/user2-160x160.jpg') }}" alt="user image">
							<a class="users-list-name" href="#">Raditya Chandra Buana</a>
							<span class="users-list-date">Today</span>
						</li>
						<li>
							<img src="{{ url('/img/user2-160x160.jpg') }}" alt="user image">
							<a class="users-list-name" href="#">Raditya Chandra Buana</a>
							<span class="users-list-date">Today</span>
						</li>
						<li>
							<img src="{{ url('/img/user2-160x160.jpg') }}" alt="user image">
							<a class="users-list-name" href="#">Raditya Chandra Buana</a>
							<span class="users-list-date">Today</span>
						</li>
						<li>
							<img src="{{ url('/img/user2-160x160.jpg') }}" alt="user image">
							<a class="users-list-name" href="#">Raditya Chandra Buana</a>
							<span class="users-list-date">Today</span>
						</li>
						<li>
							<img src="{{ url('/img/user2-160x160.jpg') }}" alt="user image">
							<a class="users-list-name" href="#">Raditya Chandra Buana</a>
							<span class="users-list-date">Today</span>
						</li>
					</ul>
				</div>
				<div class="box-footer text-center">
					<a href="{{ url('#') }}" class="uppercase">Lihat semua siswa</a>
				</div>
			</div>
		</div>
	</div>
@endsection
