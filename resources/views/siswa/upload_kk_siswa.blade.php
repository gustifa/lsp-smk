@extends('siswa.siswa_master')
@section('siswa')
@section('title')
   Agama
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">

<div class="col-xl-12 mx-auto">
				<div class="card">
					<div class="card-body">
						<form method="post" action="{{route('upload.kk.siswa')}}" enctype="multipart/form-data">
			 			@csrf
							<div class="row mb-3">
								<label class="form-label">Upload KK:</label>
								<div class="col-sm-12 text-secondary">
									<input type="file" name="kk" class="form-control" id="image">
								</div>
							</div>

							<div class="row mb-3">
											
								<div class="col-sm-12 text-secondary">
									<img id ="showImage"src="{{(!empty($dataSiswa->kk)) ? url('upload/pendaftaran_images/'.$dataSiswa->kk): url('upload/no_image.jpg')}}" alt="Admin" style="width: 500px; height: 500px;">
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