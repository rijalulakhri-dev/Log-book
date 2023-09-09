<div class="page-content">
	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-flex align-items-center justify-content-between">
					<h4 class="mb-0 font-size-18">Validation</h4>

					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
							<li class="breadcrumb-item active">Validation</li>
						</ol>
					</div>

				</div>
			</div>
		</div>
		<!-- end page title -->

		<div class="row">
			<div class="col-8">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Tambah Pengguna</h4>
						<form class="needs-validation" action="" method="POST" novalidate>
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<label for="">Nama</label>
									<input type="text" class="form-control" name="" id="" required>
								</div>
								<div class="col-md-6 mb-3">
									<label for="">Username</label>
									<input type="text" class="form-control" name="" id="" required>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<label for="">Password</label>
									<input type="text" class="form-control" name="" id="" required>
								</div>
								<div class="col-md-6 mb-3">
									<label>Level Akses</label>
									<select class="form-control" data-toggle="select2">
										<option default>--Pilih--</option>
										<option value="1">Admin</option>
										<option value="2">Pembimbing Redaksi</option>
										<option value="3">Pembimbing Materi</option>
										<option value="4">Mahasiswa</option>
									</select>
								</div>
							</div>
							<button class="btn btn-primary waves-effect waves-light" type="submit">Tambah Data</button>
						</form>

					</div> <!-- end card-body-->
				</div> <!-- end card-->
			</div> <!-- end col -->
		</div>




	</div> <!-- container-fluid -->
</div>