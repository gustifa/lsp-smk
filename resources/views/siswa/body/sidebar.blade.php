<ul class="metismenu" id="menu">
				<li>
					<a href="{{route('siswa.dashboard')}}">
						<div class="parent-icon"><i class='bx bx-home'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				

				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-data"></i>
						</div>
						<div class="menu-title">Lengkapi Data</div>
					</a>
					<ul>
						
						<li> <a href="{{route('siswa.data')}}"><i class="bx bx-right-arrow-alt"></i>Form APL.01</a>
						</li>
						
				
					
						
						<li> <a href="{{route('siswa.data.asesmen')}}"><i class="bx bx-right-arrow-alt"></i>Form APL.02</a>
						</li>
						
					</ul>
				</li>

				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-upload"></i>
						</div>
						<div class="menu-title">Upload</div>
					</a>
					<ul>
						<li> <a href="{{route('ktp.siswa')}}"><i class="bx bx-right-arrow-alt"></i>Upload KTP</a>
						</li>

						<li> <a href="{{route('kk.siswa')}}"><i class="bx bx-right-arrow-alt"></i>Upload KK</a>
						</li>
						<li> <a href="{{route('sertifikat.siswa')}}"><i class="bx bx-right-arrow-alt"></i>Upload Sertifikat</a>
						</li>
						<li> <a href="{{route('sertifikat.siswa')}}"><i class="bx bx-right-arrow-alt"></i>Upload Raport</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-message-check"></i>
						</div>
						<div class="menu-title">Asesmen</div>
					</a>
					<ul>
						<li> <a href="{{route('pendaftaran.pdf')}}"><i class="bx bx-right-arrow-alt"></i>Bukti Pendaftaran</a>
						<li> <a href="{{route('pendaftaran.admin.pdf')}}"><i class="bx bx-right-arrow-alt"></i>Rekap Pendaftaran</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-printer"></i>
						</div>
						<div class="menu-title">Cetak</div>
					</a>
					<ul>
						<li> <a href="{{route('pendaftaran.pdf')}}"><i class="bx bx-right-arrow-alt"></i>Bukti Pendaftaran</a>
						<li> <a href="{{route('pendaftaran.admin.pdf')}}"><i class="bx bx-right-arrow-alt"></i>Rekap Pendaftaran</a>
						</li>
					</ul>
				</li>


</ul>