@extends('admin.admin_master')
@section('admin')

@section('title')
   Data LSP
@endsection

<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3"> LSP</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Data LSP</li>
							</ol>
						</nav>
					</div>


				</div>
				<!--end breadcrumb-->


				<!-- Awal Moodal -->
				<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
											<div class="btn-group" role="group">
												<button type="button" class="btn btn-primary mb-3 mb-lg-0" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bxs-plus-square'></i> Asesi / Siswa</button>
											</div>
										</div>

										<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Form Tambah Siswa</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
				<form action="{{ route('admin.simpan.pendaftaran.siswa') }}" method="POST">
            @csrf

									<div class="mb-3">
										<label class="form-label">Username:</label>
										<input type="text" name="username" class="form-control" placeholder="Inputkan username">
										@error('username')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
									</div>
									<div class="mb-3">
										<label class="form-label">Password:</label>
										<input type="password" name="password" class="form-control" placeholder="Inputkan Password">
										@error('password')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
									</div>
									<div class="mb-3">
										<label class="form-label">Nama Lengkap:</label>
										<input type="text" name="name" class="form-control" placeholder="Inputkan Nama Lengkap">
										@error('name')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
									</div>
									<div class="mb-3">
										<label class="form-label">e-MAIL:</label>
										<input type="email" name="email" class="form-control" placeholder="Inputkan Nama e-Mail">
										@error('email')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
									</div>
									<div class="mb-3">

										<label class="form-label">Tempat Lahir:</label>
										

										<input type="text" name="tempat_lahir" class="form-control" placeholder="Inputkan Tempat Lahir">
										@error('tempat_lahir')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
										
									</div>

									<div class="mb-3">

										<label class="form-label">Tanggal Lahir:</label>
										

										<input type="date" name="tanggal_lahir" class="form-control" placeholder="Inputkan Tanggal Lahir">
										@error('tanggal_lahir')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
										
									</div>
					
									<div class="mb-3">

										<label class="form-label">NIK:</label>
										

										<input type="number" name="nik" class="form-control" placeholder="Inputkan NIK">
										@error('nik')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
										
									</div>
									
										
									
									<!-- <div class="mb-3">
										<button type="submit" class="btn btn-primary px-5"><i class='bx bx-save mr-1'></i>Simpan</button>
									</div> -->
								

													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
														<button type="submit" class="btn btn-primary">Simpan</button>
													</div>
													</form>
												</div>
											</div>
										</div>	<!-- AKhir Moodal -->

											<!-- Awal Moodal Edit Data -->
										<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Form Edit Siswa</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
				<form action="{{ route('admin.simpan.pendaftaran.siswa') }}" method="POST">
            @csrf

									<div class="mb-3">
										<label class="form-label">Username:</label>
										<input type="text" name="username" class="form-control">
										@error('username')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
									</div>
									<div class="mb-3">
										<label class="form-label">Password:</label>
										<input type="password" name="password" class="form-control" placeholder="Inputkan Password">
										@error('password')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
									</div>
									<div class="mb-3">
										<label class="form-label">Nama Lengkap:</label>
										<input type="text" name="name" class="form-control" placeholder="Inputkan Nama Lengkap">
										@error('name')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
									</div>
									<div class="mb-3">
										<label class="form-label">e-MAIL:</label>
										<input type="email" name="email" class="form-control" placeholder="Inputkan Nama e-Mail">
										@error('email')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
									</div>
									<div class="mb-3">

										<label class="form-label">Tempat Lahir:</label>
										

										<input type="text" name="tempat_lahir" class="form-control" placeholder="Inputkan Tempat Lahir">
										@error('tempat_lahir')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
										
									</div>

									<div class="mb-3">

										<label class="form-label">Tanggal Lahir:</label>
										

										<input type="date" name="tanggal_lahir" class="form-control" placeholder="Inputkan Tanggal Lahir">
										@error('tanggal_lahir')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
										
									</div>
					
									<div class="mb-3">

										<label class="form-label">NIK:</label>
										

										<input type="number" name="nik" class="form-control" placeholder="Inputkan NIK">
										@error('nik')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
										
									</div>
									
										
									
									<!-- <div class="mb-3">
										<button type="submit" class="btn btn-primary px-5"><i class='bx bx-save mr-1'></i>Simpan</button>
									</div> -->
								

													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
														<button type="submit" class="btn btn-primary">Simpan</button>
													</div>
													</form>
												</div>
											</div>
										</div>	<!-- AKhir Moodal -->

														<hr />

				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th style="width: 8px;">No</th>
										<th>Nama</th>
										<th>No Pendaftaran</th>
										<th>NIK</th>
										<th>Tempat Lahir</th>
										<th>Tanggal Lahir</th>
										<th>Detail</th>
										<!-- <th>Alamat</th> -->
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach($dataLsp as $key => $item)
									<tr>
										<td>{{$key+1}}</td>
										<td>{{$item->name}}</td>
										<td>{{$item->no_pendaftaran}}</td>
										<td>{{$item->nik}}</td>
										<td>{{$item->tempat_lahir}}</td>
										<td>{{$item->tanggal_lahir}}</td>
										<td><a class="btn btn-primary" href=""><i class='bx bx-show mr-1'></i></a></td>
										<!-- <td>{{$item->address}}</td> -->
										<td style="width: 20px;">
											<a class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bx-edit mr-1'></i></a>
											<a class="btn btn-danger" href="{{route('hapus.data.lsp',$item->id)}}" id="delete"><i class='bx bx-x-circle mr-1'></i></a>

										</td>
									</tr>
									@endforeach
								</tbody>
								
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
@endsection