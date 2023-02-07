@extends('admin.admin_master')
@section('admin')

@section('title')
   Settingan Aplikasi
@endsection

<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3"> Setting</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Setting Aplikasi</li>
							</ol>
						</nav>
					</div>


				</div>
				<!--end breadcrumb-->

				<!-- Awal Moodal -->
				<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
											
				</div>

										
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example1" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th style="width: 8px;">No</th>
										<th>Nama</th>
										<th>Judul 1</th>
										<th>Judul 2</th>
										<th>Alamat</th>
										
										<th style="width: 5px;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach($dataSetting as $key => $item)
									<tr>
										<td>{{$key+1}}</td>
										<td style="width: 10px;">{{$item->nama}}</td>
										<td style="width: 30px;">{{$item->judul1}}</td>
										<td style="width: 40px;">{{$item->judul2}}</td>
										<td style="width: 10px;">{{$item->alamat}}</td>
										<td style="width: 10px;">
											<a class="btn btn-info" href="{{route('edit.setting',$item->id)}}"><i class='bx bx-edit mr-1'></i></a>
											<!-- <a class="btn btn-danger" href="{{route('hapus.data.lsp',$item->id)}}" id="delete"><i class='bx bx-x-circle mr-1'></i></a> -->

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