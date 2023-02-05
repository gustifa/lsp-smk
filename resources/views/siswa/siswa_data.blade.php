@extends('siswa.siswa_master')
@section('siswa')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="page-wrapper">
			<div class="page-content"> 
								<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Form Pendaftaran</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Rekap Data Pendaftaran</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->

				<div class="container">
					<div class="main-body">
						<div class="row">
							<div class="col-lg-6">
								<div class="card">
									<div class="card-body">
									<form method="post" action="{{route('siswa.data.update')}}" enctype="multipart/form-data">
										@csrf
										<div class="row mb-3">
											<div class="col-sm-4">
												<h6 class="mb-0">No. Pendaftaran</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<input class="form-control form-control-sm mb-3" type="text" value="{{$dataSiswa->no_pendaftaran}}" disabled="">
											</div>
											
										</div>
										<div class="row mb-3">
											<div class="col-sm-4">
												<h6 class="mb-0">Nama Lengkap</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<input class="form-control form-control-sm mb-3" type="text" value="{{$dataSiswa->name}}" name="name" disabled="">
											</div>
											
										</div>

										<div class="row mb-3">
											<div class="col-sm-4">
												<h6 class="mb-0">NIK</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<input class="form-control form-control-sm mb-3" type="text" value="{{$dataSiswa->nik}}" name="nik" disabled="">
											</div>
											
										</div>
										<div class="row mb-3">
											<div class="col-sm-4">
												<h6 class="mb-0">Tempat Lahir</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<input class="form-control form-control-sm mb-3" type="text" value="{{$dataSiswa->tempat_lahir}}" required="" name="tempat_lahir">
											</div>
											
										</div>
										<div class="row mb-3">
											<div class="col-sm-4">
												<h6 class="mb-0">Tanggal Lahir</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<input class="form-control form-control-sm mb-3" type="date" value="{{$dataSiswa->tanggal_lahir}}" required="" name="tanggal_lahir">
											</div>
											
										</div>
										<div class="row mb-3">
											<div class="col-sm-4">
												<h6 class="mb-0">Alamat</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<input required="" class="form-control form-control-sm mb-3" type="text" value="{{$dataSiswa->address}}" name="address">
											</div>
											
										</div>
										<!-- <div class="row mb-3">
											<div class="col-sm-4">
												<h6 class="mb-0">HP</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<input class="form-control form-control-sm mb-3" type="text" value="{{$dataSiswa->phone}}" name="phone">
											</div>
											
										</div> -->

										<div class="row mb-3">
											<div class="col-sm-4">
												<h6 class="mb-0">Jurusan</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<select name="jurusan" required="" class="form-select" id="inputSelectCountry" aria-label="Default select example">
													<option value="" selected="" disabled="">Program Keahlian</option>
													 @foreach($dataJurusan as $item)
													<option value="{{ $item->id }}">{{ $item->kode }}</option>
												 	@endforeach
												</select>


											</div>
										</div>

										
										<!-- <div class="row mb-3">
											<div class="col-sm-4">
												<h6 class="mb-0">Materi Ujian</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<select name="materi_uji" class="form-select" id="inputSelectCountry" aria-label="Default select example">
													<option value="" selected="" disabled="">Cluster Ujian</option>
													 @foreach($dataJurusan as $item)
													<option value="{{ $item->id }}">{{ $item->kode }}</option>
												 	@endforeach
												</select>
											</div>
										</div> -->

										

										



										
										
										<div class="row">
											<div class="col-sm-4"></div>
											<div class="col-sm-8 text-secondary">
												<input type="submit" class="btn btn-primary px-4" value="Perbaiki Data">
											</div>
										</form>
										</div>
									</div>
								</div>

							</div>

							<div class="col-lg-6">
								<div class="card">
									<div class="card-body">
									<form method="post" action="{{route('siswa.profile.store')}}" enctype="multipart/form-data">
										@csrf
										



										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Upload KK</h6>
											</div>
											<div class="col-sm-3 text-secondary">
												<input type="file" name="kk" class="form-control" required="" id="image">
											</div>
											<div class="col-sm-6 text-secondary">
												<img id ="showImage"src="{{(!empty($dataSiswa->photo)) ? url('upload/siswa_images/'.$dataSiswa->photo): url('upload/no_image.jpg')}}" alt="Admin" style="width: 100px; height: 100px;">
											</div>
											
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Upload KTP</h6>
											</div>
											<div class="col-sm-3 text-secondary">
												<input type="file" name="photo" required="" class="form-control" id="image">
											</div>
											<div class="col-sm-6 text-secondary">
												<img id ="showImage"src="{{(!empty($dataSiswa->photo)) ? url('upload/siswa_images/'.$dataSiswa->photo): url('upload/no_image.jpg')}}" alt="Admin" style="width: 100px; height: 100px;">
											</div>
											
										</div>

										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Upload Sertifikat</h6>
											</div>
											<div class="col-sm-3 text-secondary">
												<input type="file" name="photo" required="" class="form-control" id="image">
											</div>
											<div class="col-sm-6 text-secondary">
												<img id ="showImage"src="{{(!empty($dataSiswa->photo)) ? url('upload/siswa_images/'.$dataSiswa->photo): url('upload/no_image.jpg')}}" alt="Admin" style="width: 100px; height: 100px;">
											</div>
											
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Upload Raport</h6>
											</div>
											<div class="col-sm-3 text-secondary">
												<input type="file" name="photo" required="" class="form-control" id="image">
											</div>
											<div class="col-sm-6 text-secondary">
												<img id ="showImage"src="{{(!empty($dataSiswa->photo)) ? url('upload/siswa_images/'.$dataSiswa->photo): url('upload/no_image.jpg')}}" alt="Admin" style="width: 100px; height: 100px;">
											</div>
											
										</div>
										
										<div class="row">
											<div class="col-sm-3"></div>
											<div class="col-sm-9 text-secondary">
												<input type="submit" class="btn btn-primary px-4" value="Upload">
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