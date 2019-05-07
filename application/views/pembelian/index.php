<section class="container my-4">
	<form action="<?= base_url(); ?>Pembelian/Data_pembeli" method ="post">

		<h5 class="text-center" style="color:white;" id="datadiri1">Informasi Pembeli &nbsp<i class="fas fa-user-circle"></i></h5>
		<hr>
		<div>
			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1" >Nama</label>
						<input type="text" class="form-control" id="nama" name = 'nama' aria-describedby="emailHelp">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
							else.</small>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Alamat Email</label>
						<input type="email" class="form-control" id="email" name = 'email' aria-describedby="emailHelp">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
							else.</small>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Nomor Handphone</label>
						<input type="text" class="form-control" id="no_telp" name = 'no_telp' aria-describedby="emailHelp">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
							else.</small>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Keterangan Tambahan</label>
						<input type="text" class="form-control" id="catatan" name = 'catatan' aria-describedby="emailHelp">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
							else.</small>
					</div>
				</div>
			</div>
		</div>

		<h5 class="text-center" style="color:white;" id="datadiri2">Alamat Pengiriman &nbsp<i class="fas fa-home"></i></h5>
		<hr>
		<div>
			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Provinsi</label>
						<input type="text" class="form-control" id="provinsi" name = 'provinsi' aria-describedby="emailHelp"">
						<small id=" emailHelp" class="form-text text-muted">We'll never share your email with anyone
						else.</small>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Kabupaten / Kota</label>
						<input type="text" class="form-control" id="kabupaten" name = 'kabupaten' aria-describedby="emailHelp">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
							else.</small>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Kecamatan</label>
						<input type="text" class="form-control" id="kecamatan" name = 'kecamatan' aria-describedby="emailHelp">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
							else.</small>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Kode POS</label>
						<input type="text" class="form-control" id="exampleInputEmail1" name = 'kodepos' aria-describedby="emailHelp">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
							else.</small>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Detail Alamat</label>
						<textarea class="form-control font-italic" id="detail_alamat" name = 'alamatlengkap' rows="3"
							placeholder="contoh : Nama jalan, Nama Dusun atau Kampung, RT/RW dan Kelurahan/Desa"></textarea>
					</div>
				</div>
				<div class="col-12">
					<div class="alert alert-danger text-right" role="alert">
						Pastikan sekali lagi data yang di-input sudah sesuai.
					</div>
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col-6"><a href="<?= base_url(); ?>keranjang/index"
					class="btn btn-outline-secondary btn-block align-right"><i class="fas fa-arrow-circle-left fa-lg"></i>
					Back to Cart</a></div>
			<div class="col-6"><button type="submit" class="btn btn-block btn-warning">Detail Pesanan</button></div>
		</div>
	</form>
</section>
