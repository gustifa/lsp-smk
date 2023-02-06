@extends('admin.admin_master')
@section('admin')

<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">LSP</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Form LSP-P1</li>
							</ol>
						</nav>
					</div>


				</div>
				<!--end breadcrumb-->
	
						<div class="row">
					<div class="col-xl-12 mx-auto">
						<div class="card">
							<div class="card-body">
								<form method="post" action="{{ route('update.data.lsp',$dataLsp->id) }}">
	 	@csrf

									<div class="mb-3">
										<label class="form-label">No. Pendaftaran:</label>
										<input type="text" name="no_pendaftaran" value="{{$dataLsp->no_pendaftaran}}" class="form-control" disabled="">
										@error('no_pendaftaran')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
									</div>
									<div class="mb-3">
										<label class="form-label">Nama Siswa:</label>
										<input type="text" name="nama" value="{{$dataLsp->name}}" class="form-control">
										@error('name')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
									</div>
									<div class="mb-3">
										<label class="form-label">NIK:</label>
										<input type="text" name="nama" value="{{$dataLsp->nik}}" class="form-control">
										@error('nik')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
									</div>
									<div class="mb-3">
										<label class="form-label">Username:</label>
										<input type="text" name="nama" value="{{$dataLsp->username}}" class="form-control">
										@error('username')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
									</div>
									<div class="mb-3">
										<label class="form-label">Password:</label>
										<input type="password" name="passsword"  class="form-control">
										@error('password')
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