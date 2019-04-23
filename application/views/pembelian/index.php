<section class="container my-4">
	<form action="">

		<h5 class="text-center" style="color:white;" id="datadiri1">Informasi Pembeli</h5>
		<hr>
		<div>
			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Nama</label>
						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
							else.</small>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Alamat Email</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
							else.</small>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Nomor Handphone</label>
						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
							else.</small>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Keterangan Tambahan</label>
						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
							else.</small>
					</div>
				</div>
			</div>
		</div>

		<h5 class="text-center" style="color:white;" id="datadiri2">Alamat Pengiriman</h5>
		<hr>
		<div>
			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Provinsi</label>
						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"">
						<small id=" emailHelp" class="form-text text-muted">We'll never share your email with anyone
						else.</small>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Kabupaten / Kota</label>
						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
							else.</small>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Kecamatan</label>
						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
							else.</small>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Kode POS</label>
						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
							else.</small>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Detail Alamat</label>
						<textarea class="form-control font-italic" id="detail_alamat" rows="3"
							placeholder="contoh : Nama jalan, Nama Dusun atau Kampung, RT/RW dan Kelurahan/Desa"></textarea>
					</div>
				</div>
				<div class="col-12">
					<div class="alert alert-info" role="alert">
						Pastikan sekali lagi data yang di-input sudah sesuai.
					</div>
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col-6 my-2"><a href="<?= base_url(); ?>marketplace/index"
					class="btn btn-outline-info btn-block align-right"><i class="fas fa-arrow-circle-left fa-lg"></i>
					Back to Marketplace</a></div>
			<div class="col-6 my-2"><a href="<?= base_url(); ?>pembelian/menunggu_ongkir"
					class="btn btn-success btn-block align-right">Detail Pesanan <i
						class="fas fa-arrow-circle-right fa-lg"></i></a></div>
		</div>
	</form>
</section>
