@extends('siswa.siswa_master')
@section('siswa')
@section('title')
   Agama
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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

							<div class="row mb-3">
											
								<div class="col-sm-12 text-secondary">
									<img id ="showImage"src="{{(!empty($dataSiswa->kk)) ? url('upload/pendaftaran_images/'.$dataSiswa->kk): url('upload/no_image.jpg')}}" alt="Admin" style="width: 100px; height: 100px;">
								</div>
							</div>

							<div class="row mb-3">
								<label class="form-label">Upload KTP:</label>
								<div class="col-sm-12 text-secondary">
									<input type="file" name="ktp" class="form-control" id="image">
								</div>
							</div>

							<div class="row mb-3">
											
								<div class="col-sm-12 text-secondary">
									<img id ="showImage"src="{{(!empty($dataSiswa->ktp)) ? url('upload/pendaftaran_images/'.$dataSiswa->ktp): url('upload/no_image.jpg')}}" alt="Admin" style="width: 100px; height: 100px;">
								</div>
							</div>

							<div class="row mb-3">
								<label class="form-label">Upload Sertifikat Prakerin:</label>
								<div class="col-sm-12 text-secondary">
									<input type="file" name="sertifikat" class="form-control" id="image">
								</div>
							</div>

							<div class="row mb-3">
											
								<div class="col-sm-12 text-secondary">
									<img id ="showImage"src="{{(!empty($dataSiswa->sertifikat)) ? url('upload/pendaftaran_images/'.$dataSiswa->sertifikat): url('upload/no_image.jpg')}}" alt="Admin" style="width: 100px; height: 100px;">
								</div>
							</div>

																
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
		<!--end page wrapper -->
@endsection