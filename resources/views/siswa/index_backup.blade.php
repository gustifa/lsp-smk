@extends('siswa.siswa_master')
@section('siswa')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="page-wrapper">
			<div class="page-content"> 
								<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Beranda</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href=""><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->

				<div class="container">
					<div class="main-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-body">
										<div class="d-flex flex-column align-items-center text-center">
											<h3>Selamat Datang <b>{{$dataSiswa->name}}</b></h3> 
												<h3>LSP-P1 SMK Negeri 1 Kinali</h3>
											<img src="{{(!empty($dataSiswa->photo)) ? url('upload/siswa_images/'.$dataSiswa->photo): url('upload/no_image.jpg')}}" alt="Admin" class="rounded-circle p-1 bg-primary" width="210">
											<div class="mt-3">
												<h4>Nama: {{$dataSiswa->name}}</h4>
												<p class="text-secondary mb-1">Nik: {{$dataSiswa->nik}}</p>
												
											</div>
										</div>
										<!-- <hr class="my-12"> -->
										
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-body">
									<form method="post" action="{{route('siswa.profile.store')}}" enctype="multipart/form-data">
										@csrf
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Username</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" name="username" class="form-control" value="{{$dataSiswa->username}}">
											</div>
										</div>

										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Full Name</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" name="name" class="form-control" value="{{$dataSiswa->name}}">
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Email</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" name="email" class="form-control" value="{{$dataSiswa->email}}">
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Phone/WA</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" name="phone" class="form-control" value="{{$dataSiswa->phone}}">
											</div>
										</div>
										
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Alamat</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" name="address" class="form-control" value="{{$dataSiswa->address}}">
											</div>
										</div>

										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Photo</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="file" name="photo" class="form-control" id="image">
											</div>
										</div>

										<div class="row mb-3">
											<div class="col-sm-3">
											</div>
											<div class="col-sm-9 text-secondary">
												<img id ="showImage"src="{{(!empty($dataSiswa->photo)) ? url('upload/siswa_images/'.$dataSiswa->photo): url('upload/no_image.jpg')}}" alt="Admin" style="width: 100px; height: 100px;">
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-3"></div>
											<div class="col-sm-9 text-secondary">
												<input type="submit" class="btn btn-primary px-4" value="Save Changes">
											</div>
										</form>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		})

	});

</script>
@endsection