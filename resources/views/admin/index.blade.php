@extends('admin.admin_master')
@section('admin')
<div class="page-wrapper">
			<div class="page-content">

					<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
						<div class="col">
							<div class="card radius-10 bg-gradient-deepblue">
							 <div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0 text-white">

										{{$dataSiswa->count()}}

									</h5>
									<div class="ms-auto">
                                        <i class='bx bx-user fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3 bg-light-transparent" style="height:3px;">
									
								</div>
								<a href="">
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Jumlah Asesi </p>

								</div>
								</a>
							</div>
						  </div>
						</div>
						<div class="col">
							<div class="card radius-10 bg-gradient-orange">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0 text-white">

										{{$dataAsesor->count()}}
										


									</h5>
									<div class="ms-auto">
                                        <i class='bx bx-group fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3 bg-light-transparent" style="height:3px;">
									<!-- <div class="progress-bar bg-white" role="progressbar" style="width: %" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div> -->
								</div>
								<a href="{{route('lihat.user')}}">
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Jumlah Asesor</p>
								</div>
								</a>
							</div>
						  </div>
						</div>
						<div class="col">
							<div class="card radius-10 bg-gradient-ohhappiness">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0 text-white">
										{{$dataJurusan->count()}}

										

									</h5>
									<div class="ms-auto">
                                        <i class='bx bx-group fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3 bg-light-transparent" style="height:3px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Jumlah Jurusan</p>
									
								</div>
							</div>
						</div>
						</div>

						<div class="col">
							<div class="card radius-10 bg-gradient-ohhappiness">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0 text-white">
										{{$dataAdmin->count()}}

										

									</h5>
									<div class="ms-auto">
                                        <i class='bx bx-group fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3 bg-light-transparent" style="height:3px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Jumlah Admin</p>
									
								</div>
							</div>
						</div>
						</div>

						

					</div><!--end row-->
				



					  <div class="card radius-10">
						
						</div>
					</div>

			</div>
		</div>
@endsection