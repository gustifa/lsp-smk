@extends('siswa.siswa_master')
@section('siswa')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="page-wrapper">
			<div class="page-content"> 
								<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">FORMULIR.APL.01.</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">PERMOHONAN SERTIFIKASI KOMPETENSI
</li>
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
										<h5 class="mb-3">Informasi Pendaftaran</h5>
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
												<h6 class="mb-0">No. KTP/NIK/Paspor</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<input class="form-control form-control-sm mb-3" type="text" value="{{$dataSiswa->nik}}" name="nik" disabled="">
											</div>
											
										</div>


																			
										<!-- <div class="row">
											<div class="col-sm-4"></div>
											<div class="col-sm-8 text-secondary">
												<input type="submit" class="btn btn-primary px-4" value="Perbaiki Data">
											</div>
										
										</div> -->
									</div>
								</div>

							</div> <!-- Akhir -->


														<div class="col-lg-6">
								<div class="card">
									<div class="card-body">
										<h5 class="mb-3">a. Data Pribadi</h5>
									<form method="post" action="{{route('siswa.data.update')}}" enctype="multipart/form-data">
										@csrf
										

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
												<h6 class="mb-0">Jenis Kelamin</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<select required="" name="jenis_kelamin" class="form-select" id="inputSelectCountry" aria-label="Default select example">
													<option value="" selected="" disabled="">Jenis Kelamin</option>
<option value="Laki-Laki"{{ ($dataSiswa->jenis_kelamin == 'Laki-Laki')? 'selected':'' }}>Laki-Laki</option>
<option value="Perempuan"{{ ($dataSiswa->jenis_kelamin == 'Perempuan')? 'selected':'' }}>Perempuan</option>
												</select>
											</div>
										</div>

										<div class="row mb-3">
											<div class="col-sm-4">
												<h6 class="mb-0">Kebangsaan</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<select required="" name="kebangsaan" class="form-select" id="inputSelectCountry" aria-label="Default select example">
													<option value="" selected="" disabled="">Kebangsaan</option>
<option value="WNI"{{ ($dataSiswa->kebangsaan == 'WNI')? 'selected':'' }}>WNI</option>
<option value="WNA"{{ ($dataSiswa->kebangsaan == 'WNA')? 'selected':'' }}>WNA</option>

												</select>
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

										<div class="row mb-3">
											<div class="col-sm-4">
												<h6 class="mb-0">No. Telepon</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<input class="form-control form-control-sm mb-3" type="number" value="{{$dataSiswa->phone}}" name="phone">
											</div>
											
										</div>
										<div class="row mb-3">
											<div class="col-sm-4">
												<h6 class="mb-0">Email</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<input class="form-control form-control-sm mb-3" type="text" value="{{$dataSiswa->email}}" name="email">
											</div>
											
										</div>


										<div class="row mb-3">
											<div class="col-sm-4">
												<h6 class="mb-0">Jurusan</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<select name="jurusan" required="" class="form-select" id="inputSelectCountry" aria-label="Default select example">
													<option value="" selected="" disabled="">Program Keahlian</option>
													 @foreach($dataJurusan as $item)
<option value="{{ $item->id }}" {{ ($item->id == $item->id)? "selected":"" }}>{{ $item->kode }}</option>
												 	@endforeach
												</select>


											</div>
										</div>

										<div class="row mb-3">
											<div class="col-sm-4">
												<h6 class="mb-0">Kualifikasi Pendidikan </h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<input class="form-control form-control-sm mb-3" type="text" value="{{$dataSiswa->pendidikan}}" name="pendidikan">
											</div>
											
										</div>										
										<!-- <div class="row">
											<div class="col-sm-4"></div>
											<div class="col-sm-8 text-secondary">
												<input type="submit" class="btn btn-primary px-4" value="Perbaiki Data">
											</div>
										
										</div> -->
									</div>
								</div>

							</div> <!-- Akhir -->

							<!-- b. Data PekerjaanSekarang ===Awal=== -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-body">
										<h5 class="mb-3">b. Data Pekerjaan Sekarang</h5>
										<div class="row mb-3">
											<div class="col-sm-4">
												<h6 class="mb-0">Nama Institusi/ Perusahaan </h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<input class="form-control form-control-sm mb-3" type="text" value="{{$dataSiswa->pekerjaan}}" name="pekerjaan">
											</div>
											
										</div>
										<div class="row mb-3">
											<div class="col-sm-4">
												<h6 class="mb-0">Jabatan</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<input class="form-control form-control-sm mb-3" type="text" value="{{$dataSiswa->jabatan}}" name="jabatan">
											</div>
											
										</div>
										


										<div class="row mb-3">
											<div class="col-sm-4">
												<h6 class="mb-0">Alamat Kantor</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<input class="form-control form-control-sm mb-3" type="text" value="{{$dataSiswa->alamat_kantor}}" name="alamat_kantor">
											</div>
											
										</div>

										<div class="row mb-3">
											<div class="col-sm-4">
												<h6 class="mb-0">No. Telepon</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<input class="form-control form-control-sm mb-3" type="text" value="{{$dataSiswa->phone_kantor}}" name="phone_kantor">
											</div>
											
										</div>

										<div class="row mb-3">
											<div class="col-sm-4">
												<h6 class="mb-0">Email Kantor</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<input class="form-control form-control-sm mb-3" type="text" value="{{$dataSiswa->email_kantor}}" name="email_kantor">
											</div>
											
										</div>



										<div class="row mb-3">
											<div class="col-sm-4">
												<h6 class="mb-0">Kode Pos</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<input class="form-control form-control-sm mb-3" type="text" value="{{$dataSiswa->kode_pos_kantor}}" name="kode_pos_kantor">
											</div>
											
										</div>										
										<div class="row">
											<div class="col-sm-12">
												<h3 class="text-warning">Catatan Penting!!!</h3>
												<h4 class="text-danger">Lengkapai Seluruh <b>Data Pribadi</b>. Untuk <b>Data Pekerjaan Sekarang</b> boleh diisi atau dikosongkan. </h4>
											</div>
							
										</div>
										<div class="row">
											<div class="col-sm-4">
											</div>
											<div class="col-sm-8 text-secondary">
												<input type="submit" class="btn btn-primary px-4" value="Perbaiki Data">
											</div>
										</form>
										</div>
									</div>
								</div>

							</div>

							<!-- <div class="col-lg-6">
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

							</div> -->
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