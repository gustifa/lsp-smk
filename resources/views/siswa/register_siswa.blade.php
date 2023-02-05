<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('backend/assets/images/favicon-32x32.png')}}" type="image/png" />
	<!--plugins-->
	<link href="{{asset('backend/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('backend/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('backend/assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/assets/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('backend/assets/css/icons.css')}}" rel="stylesheet">
	<title>LSP P-1 SMK NEGERI 1 KINALI</title>
</head>

<body class="bg-login">
	<!--wrapper-->
	<div class="wrapper">
		<div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col mx-auto">
						<div class="my-4 text-center">
							<img src="assets/images/logo-img.png" width="180" alt="" />
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Form Pendaftaran</h3>
										<p>Sudah Register <a href="{{url('/siswa/login')}}">Sign in</a>
										</p>
									</div>
									
									<div class="form-body">
										<form class="row g-3" method="post" action="{{route('simpan.pendaftaran.siswa')}}" enctype="multipart/form-data">
	 	@csrf
									
											<div class="col-sm-6">
												<label for="inputFirstName" class="form-label">Nama Lengkap</label>
												<input type="text" name="name" class="form-control" id="inputFirstName" required="" placeholder="Alfatih Riski">
											</div>

											<div class="col-sm-6">
												<label for="inputFirstName" class="form-label">Email</label>
												<input type="email" name="email" class="form-control" required="" placeholder="alfatihriski@gmail.com">
											</div>
											
											<div class="col-6">
												<label for="inputEmailAddress" class="form-label">Username</label>
												<input type="text" name="username" required="" class="form-control" id="inputEmailAddress" placeholder="username">
											</div>
											<div class="col-6">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" required="" name="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>

											<div class="col-6">
												<label for="inputEmailAddress" class="form-label">Tempat Lahir</label>
												<input type="text" name="tempat_lahir" required="" class="form-control" id="inputEmailAddress" placeholder="username">
											</div>
											<div class="col-6">
												<label for="inputChoosePassword" class="form-label">Tanggal Lahir</label>
												<div class="input-group" id="show_hide_password">
													<input type="date" name="tanggal_lahir" required="" class="form-control border-end-0">
												</div>
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">NIK</label>
												<div class="input-group" id="show_hide_password">
													<input type="text" name="nik" class="form-control border-end-0">
												</div>
											</div>
											

											 <!-- <div class="col-sm-6">
												<label for="inputSelectCountry" class="form-label">Program Keahlian</label>
												<select name="jurusan" class="form-select" id="inputSelectCountry" aria-label="Default select example">
													<option value="" selected="" disabled="">Pilih Jurusan</option>
													 @foreach($dataJurusan as $item)
													<option value="{{ $item->id }}">{{ $item->kode }}</option>
												 	@endforeach
												</select>
											</div> -->
											<!--
											<div class="col-sm-6">
												<label for="inputSelectCountry" class="form-label">Jurusan</label>
												<select name="jenis_kelamin" class="form-select" id="inputSelectCountry" aria-label="Default select example">
													<option value="" selected="" disabled="">Jenis Kelamin</option>
													
													<option value="Laki-Laki">Laki-Laki</option>
													<option value="Perempuan">Perempuan</option>
												 	
												</select>
											</div>

											<div class="col-12">
												<label for="inputSelectCountry" class="form-label">Asesor</label>
												<select name="asesor" class="form-select" id="inputSelectCountry" aria-label="Default select example">
													<option value="" selected="" disabled="">Pilih Asesor</option>
													 @foreach($dataJurusan as $item)
													<option value="{{ $item->id }}">{{ $item->kode }}</option>
												 	@endforeach
												</select>
											</div> -->
											
											<div class="col-12">
												<div class="d-grid">
													<!-- <input type="submit" class="btn btn-primary" value="Daftar"> -->
													<button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>Daftar</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="{{asset('backend/assets/js/app.js')}}"></script>
</body>

</html>