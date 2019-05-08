<section class="container my-4">
	<form action="<?= base_url(); ?>Pembelian/Data_pembeli" method ="post">

		<h5 class="text-center" style="color:white;" id="datadiri1">Informasi Pembeli &nbsp<i class="fas fa-user-circle"></i></h5>
		<hr>
		<div>
			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="nama" >Nama</label>
						<input type="text" class="form-control" id="nama" name = 'nama'>
						<small id="" class="form-text text-muted text-danger"><?= form_error('nama'); ?></small>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="email">Alamat Email</label>
						<input type="email" class="form-control" id="email" name = 'email' aria-describedby="emailHelp">
						<small id="" class="form-text text-muted text-danger"><?= form_error('email'); ?></small>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="no_telp">Nomor Handphone</label>
						<input type="text" class="form-control" id="no_telp" name = 'no_telp'>
						<small id="" class="form-text text-muted text-danger"><?= form_error('no_telp'); ?></small>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="catatan">Keterangan Tambahan</label>
						<input type="text" class="form-control" id="catatan" name = 'catatan'>
						<small id="" class="form-text text-muted text-danger"><?= form_error('catatan'); ?></small>
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
						<label for="provinsi">Provinsi</label>
						<input type="text" class="form-control" id="provinsi" name = 'provinsi'>
						<small id="" class="form-text text-muted text-danger"><?= form_error('provinsi'); ?></small>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="kabupaten">Kabupaten / Kota</label>
						<input type="text" class="form-control" id="kabupaten" name = 'kabupaten'>
						<small id="" class="form-text text-muted text-danger"><?= form_error('kabupaten'); ?></small>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="kecamatan">Kecamatan</label>
						<input type="text" class="form-control" id="kecamatan" name = 'kecamatan'>
						<small id="" class="form-text text-muted text-danger"><?= form_error('kecamatan'); ?></small>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="kodepos">Kode POS</label>
						<input type="text" class="form-control" id="kodepos" name = 'kodepos'>
						<small id="" class="form-text text-muted text-danger"><?= form_error('kodepos'); ?></small>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="alamatlengkap">Detail Alamat</label>
						<!-- <textarea class="form-control font-italic" id="alamatlengkap" name = 'alamatlengkap' rows="3" placeholder="contoh : Nama jalan, Nama Dusun atau Kampung, RT/RW dan Kelurahan/Desa"></textarea> -->
						<input type="text" class="form-control font-italic" id="alamatlengkap" name = 'alamatlengkap' placeholder="nama dusun / perumahan, nomor RT / RW dan nama desa / kelurahan">
						<small id="" class="form-text text-muted text-danger"><?= form_error('alamatlengkap'); ?></small>
					</div>
				</div>
				<div class="col-12">
					<div class="alert alert-danger text-center" role="alert">
						Pastikan sekali lagi data yang di-input sudah sesuai.
					</div>
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col-6"><a href="<?= base_url(); ?>keranjang/index"
					class="btn btn-outline-secondary btn-block align-right"><i class="fas fa-arrow-circle-left fa-lg"></i>
					Back to Cart</a>
			</div>

			<div class="col-6"><button type="submit" class="btn btn-block btn-warning" name="Simpandetailpesanan">Detail Pesanan</button></div>
		
		</div>
	</form>
</section>
