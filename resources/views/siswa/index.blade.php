@extends('siswa.siswa_master')
@section('siswa')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="page-wrapper">
			<div class="page-content"> 
								<!--breadcrumb-->
				<!-- <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
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

				</div> -->
				<!--end breadcrumb-->

				<div class="container">
					<div class="main-body">
						<div class="row">
							<section class="content">
				<div class="box box-success">
										<div class="box-header with-border">
          				<h4 class="box-title">Selamat Datang <b>{{$dataSiswa->name}}</b></h4>
          				<h5 class="box-title" >Dashboard <b class="text-success">Aplikasi e-lspSMK </b></h5>

					</div>
										<div class="box-body">
                						<hr />
												
										</div><!--/box-body-->
									</div>
								
				            </section>
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