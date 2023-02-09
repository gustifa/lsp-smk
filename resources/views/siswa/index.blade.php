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
          				<h4 class="box-title">Selamat Datang <b>{{$dataSiswa->name}}</b>
</h4>
<h5 class="box-title">Jurusan <b>{{$dataSiswa->jurusan->nama}}</b>
</h5>
					</div>
										<div class="box-body">
                						<hr />
		<!-- <table class="table table-bordered table-striped table-hover datatable">
			<thead>
				<tr>
					<th rowspan="2" style="width: 10px;vertical-align:middle;" class="text-center">#</th>
					<th rowspan="2" style="vertical-align:middle;" class="text-center">Mata Pelajaran</th>
					<th rowspan="2" style="vertical-align:middle;" class="text-center">Rombel</th>
					<th rowspan="2" style="vertical-align:middle;" class="text-center">Wali Kelas</th>
					<th rowspan="2" style="vertical-align:middle;" class="text-center">Jumlah PD</th>
					<th class="text-center" colspan="2">Generate Nilai</th>
				</tr>
				<tr>
					<th class="text-center">Pengetahuan</th>
					<th class="text-center">Keterampilan</th>
				</tr>
			</thead>
			<tbody>
													<tr>
					<td>1</td>
					<td>Informatika (700106100)</td>
					<td class="text-center">10 TO 1</td>
					<td>SYAIKA ARDINI, S.Pd.</td>
					<td class="text-center">32</td>
					<td><div class="text-center">
						<a href="http://portal.smkn1kinali.sch.id:8150/generate-nilai/b31368aa-01b2-49aa-b1af-9dc4c1586648/3" class="generate_nilai btn btn-sm btn-danger btn_generate btn-sm"><i class="fa fa-check-square-o"></i> Perbaharui</a>					</div></td>
					<td><div class="text-center">-</div></td>
				</tr>
											<tr>
					<td>2</td>
					<td>Informatika (700106100)</td>
					<td class="text-center">10 AKL 1</td>
					<td>RATNA SARI, S.Pd.</td>
					<td class="text-center">36</td>
					<td><div class="text-center">
						<a href="http://portal.smkn1kinali.sch.id:8150/generate-nilai/cae1dbac-3cf1-40ba-ab8a-07340a3da947/3" class="generate_nilai btn btn-sm btn-danger btn_generate btn-sm"><i class="fa fa-check-square-o"></i> Perbaharui</a>					</div></td>
					<td><div class="text-center">-</div></td>
				</tr>
											<tr>
					<td>3</td>
					<td>Informatika (700106100)</td>
					<td class="text-center">10 TO 2</td>
					<td>ASEP RUKMAN RUHANA, S.Pd.</td>
					<td class="text-center">35</td>
					<td><div class="text-center">
						<a href="http://portal.smkn1kinali.sch.id:8150/generate-nilai/141c1419-4a9f-40a4-b67e-a287cc7fbebb/3" class="generate_nilai btn btn-sm btn-danger btn_generate btn-sm"><i class="fa fa-check-square-o"></i> Perbaharui</a>					</div></td>
					<td><div class="text-center">-</div></td>
				</tr>
											<tr>
					<td>4</td>
					<td>Dasar Dasar Teknik Elektronika (800000110)</td>
					<td class="text-center">10 ELKA 2</td>
					<td>RISMA HALIM, S.Pd.</td>
					<td class="text-center">36</td>
					<td><div class="text-center">
						<a href="http://portal.smkn1kinali.sch.id:8150/generate-nilai/5ff0349d-3c10-49b3-8704-b29b29dc632c/3" class="generate_nilai btn btn-sm btn-danger btn_generate btn-sm"><i class="fa fa-check-square-o"></i> Perbaharui</a>					</div></td>
					<td><div class="text-center">-</div></td>
				</tr>
											<tr>
					<td>5</td>
					<td>Dasar Dasar Teknik Elektronika (800000110)</td>
					<td class="text-center">10 ELKA 1</td>
					<td>DIKA, S.Pd.</td>
					<td class="text-center">36</td>
					<td><div class="text-center">
						<a href="http://portal.smkn1kinali.sch.id:8150/generate-nilai/13569dea-9384-4bb1-ad5b-ce3e61c7faa7/3" class="generate_nilai btn btn-sm btn-danger btn_generate btn-sm"><i class="fa fa-check-square-o"></i> Perbaharui</a>					</div></td>
					<td><div class="text-center">-</div></td>
				</tr>
											<tr>
					<td>6</td>
					<td>Dasar Dasar Teknik Jaringan Komputer dan Telekomun (800000122)</td>
					<td class="text-center">10 TJKT 1</td>
					<td>ROSTINNISAH, S.Kom.</td>
					<td class="text-center">35</td>
					<td><div class="text-center">
						<a href="http://portal.smkn1kinali.sch.id:8150/generate-nilai/63991818-2ea3-4761-b5f3-68b1805e9cf6/3" class="generate_nilai btn btn-sm btn-danger btn_generate btn-sm"><i class="fa fa-check-square-o"></i> Perbaharui</a>					</div></td>
					<td><div class="text-center">-</div></td>
				</tr>
								</tbody>
		</table>
		 -->
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