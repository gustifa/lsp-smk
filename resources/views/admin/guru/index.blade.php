@extends('admin.admin_master')
@section('admin')

<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Guru</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Data Guru</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="row row-cols-auto g-3">
					<div class="col">
						<!-- 			<a href="{{route('tambah.agama')}}" class="btn btn-primary mb-3 mb-lg-0"><i class='bx bxs-plus-square'></i>Agama</a>						
									</div><a href="{{route('tambah.agama')}}" class="btn btn-primary mb-3 mb-lg-0"><i class='bx bxs-plus-square'></i>Agama</a>						
									</div>
									</div><a href="{{route('tambah.agama')}}" class="btn btn-primary mb-3 mb-lg-0"><i class='bx bxs-plus-square'></i>Agama</a>						
									</div> -->

						<!-- <a href="{{route('tambah.agama')}}" class="btn btn-primary mb-3 mb-lg-0"><i class='bx bxs-plus-square'></i>Agama</a> -->
						<a href="{{route('tambah.agama')}}" class="btn btn-primary px-3"><i class="bx bxs-plus-square mr-1"></i>Guru</a>
						<!-- <a class="btn btn-dark px-3"><i class="bx bx-cloud-upload mr-1"></i>Upload</a> -->
						<!-- <a class="btn btn-dark px-5"><i class="bx bx-cloud-upload mr-1"></i>Upload</a> -->

										<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
											<div class="btn-group" role="group">
												<button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Import</button>
												<ul class="dropdown-menu" style="margin: 0px;">
													<li><a class="dropdown-item" href="#">Download Template</a>
													</li>
													<li><a class="dropdown-item" href="#">Import Guru</a>
													</li>
												</ul>
											</div>
										</div>			<!-- End Button Dropdown -->

										<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
											<div class="btn-group" role="group">
												<button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Download</button>
												<ul class="dropdown-menu" style="margin: 0px;">
													<li><a class="dropdown-item" href="#">Exel</a>
													</li>
													<li><a class="dropdown-item" href="#">PDF</a>
													</li>
												</ul>
											</div>
										</div>			<!-- End Button Dropdown -->			
					</div>
				</div>
				
				<hr/>

				<div class="card">
							<div class="card-body">
								<table class="table table-bordered mb-0">
									<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Mata Pelajaran</th>
										<th>Kelas</th>
										<th>Jurusan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach($dataGuru as $key => $item)
									<tr>
										<td>{{$key+1}}</td>
										<td>{{$item->nama}}</td>
										<td>{{$item->mapel_id}}</td>
										<td>{{$item->kelas_id}}</td>
										<td>{{$item->jurusan_id}}</td>
										<td style="width: 20px;">
											<a class="btn btn-info" href="">Edit</a>
											<a class="btn btn-danger" href="" id="delete">Hapus</a>
										</td>
									</tr>
									@endforeach
								</tbody>
								</table>
							</div>
				</div>




<!-- 				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Mata Pelajaran</th>
										<th>Kelas</th>
										<th>Jurusan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach($dataGuru as $key => $item)
									<tr>
										<td>{{$key+1}}</td>
										<td>{{$item->nama}}</td>
										<td>{{$item->mapel_id}}</td>
										<td>{{$item->kelas_id}}</td>
										<td>{{$item->jurusan_id}}</td>
										<td style="width: 20px;">
											<a class="btn btn-info" href="">Edit</a>
											<a class="btn btn-danger" href="" id="delete">Hapus</a>
										</td>
									</tr>
									@endforeach
								</tbody>
								
							</table>
						</div>
					</div>
				</div> -->
			</div>
		</div>
		<!--end page wrapper -->
@endsection