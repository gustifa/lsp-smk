@extends('admin.admin_master')
@section('admin')

<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Setting</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Form Setting</li>
							</ol>
						</nav>
					</div>


				</div>
				<!--end breadcrumb-->
	
						<div class="row">
					<div class="col-xl-12 mx-auto">
						<div class="card">
							<div class="card-body">
								<form method="post" action="{{ route('update.setting',$editSetting->id) }}">
	 	@csrf

									<div class="mb-3">
										<label class="form-label">Nama Aplikasi:</label>
										<input type="text" name="nama" value="{{$editSetting->nama}}" class="form-control">
											@error('nama')
										 	<span class="text-danger">{{ $message }}</span>
										 	@enderror
									</div>

							<div class="mb-3">
								<label for="inputProductDescription" class="form-label">Judul 1:</label>
								<textarea name="judul1" class="form-control" id="inputProductDescription" rows="3">
									{{$editSetting->judul1}}
								</textarea>
										@error('judul1')
										 	<span class="text-danger">{{ $message }}</span>
										 	@enderror
							</div>

									<!-- div class="mb-3">
										<label class="form-label">Judul 1:</label>
										<input  type="text" name="judul1" value="{{$editSetting->judul1}}" class="form-control">
											@error('judul1')
										 	<span class="text-danger">{{ $message }}</span>
										 	@enderror
									</div> -->

									<div class="mb-3">
								<label for="inputProductDescription" class="form-label">Judul 2:</label>
								<textarea name="judul2" class="form-control" id="inputProductDescription" rows="3">
									{{$editSetting->judul2}}
								</textarea>
										@error('judul2')
										 	<span class="text-danger">{{ $message }}</span>
										 	@enderror
							</div>

									<!-- <div class="mb-3">
										<label class="form-label">Judul 2:</label>
										
										<input type="text" name="judul2" value="{{$editSetting->judul2}}" class="form-control">
											@error('judul2')
										 	<span class="text-danger">{{ $message }}</span>
										 	@enderror
									</div> -->

									<div class="mb-3">
										<label class="form-label">Alamat:</label>
										<input type="text" name="alamat" value="{{$editSetting->alamat}}" class="form-control">
											@error('alamat')
										 	<span class="text-danger">{{ $message }}</span>
										 	@enderror
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
		<!--end page wrapper -->
@endsection