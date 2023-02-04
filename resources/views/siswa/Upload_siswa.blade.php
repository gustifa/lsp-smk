@extends('siswa.siswa_master')
@section('siswa')
@section('title')
   Agama
@endsection

<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
				<!-- <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Agama</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Form Agama</li>
							</ol>
						</nav>
					</div>


				</div> -->
				<!--end breadcrumb-->
	
		<div class="row">
			<div class="col-xl-7 mx-auto">
				<div class="card">
					<div class="card-body">
						<form method="post" action="{{route('siswa.data.update')}}">
			 			@csrf

							<div class="mb-3">
								<label class="form-label">NIK:</label>
								<input type="text" name="nik" value="{{$dataSiswa->nik}}" class="form-control">
									@error('nama')
			 						<span class="text-danger">{{ $message }}</span>
									 @enderror
							</div>

							<div class="mb-3">
								<label class="form-label">NAMA LENGKAP:</label>
								<input type="text" name="name" value="{{$dataSiswa->name}}" class="form-control">
									@error('nama')
			 						<span class="text-danger">{{ $message }}</span>
									 @enderror
							</div>

							<div class="mb-3">
								<label class="form-label">NAMA LENGKAP:</label>
								<input type="text" name="nik" value="{{$dataSiswa->name}}" class="form-control">
									@error('nama')
			 						<span class="text-danger">{{ $message }}</span>
									 @enderror
							</div>

							<div class="mb-3">
								<label for="inputSelectCountry" class="form-label">Jenis Kelamin</label>
												<select name="jenis_kelamin" class="form-select" id="inputSelectCountry" aria-label="Default select example">
													<option value="" selected="" disabled="">Jenis Kelamin</option>
													
													<option value="Laki-Laki">Laki-Laki</option>
													<option value="Perempuan">Perempuan</option>
												 	
												</select>
							</div>

							<div class="mb-3">
								<label for="inputSelectCountry" class="form-label">Program Keahlian</label>
												<select name="jurusan" class="form-select" id="inputSelectCountry" aria-label="Default select example">
													<option value="" selected="" disabled="">Program Keahlian</option>
													@foreach($dataJurusan as $item)
													<option value="{{ $item->id }}">{{ $item->kode }}</option>
												 	@endforeach
												</select>
							</div>

							<div class="mb-3">
								<label for="inputSelectCountry" class="form-label">Asesor</label>
												<select name="jurusan" class="form-select" id="inputSelectCountry" aria-label="Default select example">
													<option value="" selected="" disabled="">Pilih Asesor</option>
													@foreach($dataJurusan as $item)
													<option value="{{ $item->id }}">{{ $item->kode }}</option>
												 	@endforeach
												</select>
							</div>

							
							<div class="mb-3">
								<button type="submit" class="btn btn-primary px-5"><i class='bx bx-save mr-1'></i>Update</button>
							</div>
						</form>
					</div>
				</div>

			</div>

						<div class="col-xl-5 mx-auto">
				<div class="card">
					<div class="card-body">
						<form method="post" action="{{route('siswa.data.update')}}" enctype="multipart/form-data">
			 			@csrf
							<div class="row mb-3">
								<label class="form-label">Upload KK:</label>
								<div class="col-sm-12 text-secondary">
									<input type="file" name="kk" class="form-control" id="image">
								</div>
							</div>

							<!-- <div class="row mb-3">
											
								<div class="col-sm-12 text-secondary">
									<img id ="showImage"src="{{(!empty($dataSiswa->photo)) ? url('upload/siswa_images/'.$dataSiswa->photo): url('upload/no_image.jpg')}}" alt="Admin" style="width: 100px; height: 100px;">
								</div>
							</div>
 -->
							<div class="row mb-3">
								<label class="form-label">Upload KTP:</label>
								<div class="col-sm-12 text-secondary">
									<input type="file" name="ktp" class="form-control" id="image">
								</div>
							</div>

							<!-- <div class="row mb-3">
											
								<div class="col-sm-12 text-secondary">
									<img id ="showImage"src="{{(!empty($dataSiswa->photo)) ? url('upload/siswa_images/'.$dataSiswa->photo): url('upload/no_image.jpg')}}" alt="Admin" style="width: 100px; height: 100px;">
								</div>
							</div> -->

							<div class="row mb-3">
								<label class="form-label">Upload Sertifikat Prakerin:</label>
								<div class="col-sm-12 text-secondary">
									<input type="file" name="sertifikat" class="form-control" id="image">
								</div>
							</div>

							<!-- <div class="row mb-3">
											
								<div class="col-sm-12 text-secondary">
									<img id ="showImage"src="{{(!empty($dataSiswa->photo)) ? url('upload/siswa_images/'.$dataSiswa->photo): url('upload/no_image.jpg')}}" alt="Admin" style="width: 100px; height: 100px;">
								</div>
							</div> -->

																
							<div class="mb-3">
								<button type="submit" class="btn btn-primary px-5"><i class='bx bx-save mr-1'></i>Update</button>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
			



	</div>
</div>
		<!--end page wrapper -->
@endsection