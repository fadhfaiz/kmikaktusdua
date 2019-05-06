<section class="container">

	<div class="row">
		<div class="col-lg-6 col-md-12 col-sm-12 mt-4 mb-5">
			<img src="<?php echo base_url().'gambar/'.$paket->gambar?>" class="img-fluid" alt="Responsive image">
		</div>

		<div class="col-lg-6 col-md-12 col-sm-12 mt-4 mb-5">
			<div class="text-center font-weight-bold">
				<h1><?php echo $paket->nama_paket;?></h1>
			</div>
			<div class="text-center text-muted font-italic">
				<h6><?php echo $paket->kode_paket;?></h6>
			</div>
			<div class="text-center" class="h3">Rp. <?php echo $paket->harga;?></a></div>
			<a href="<?= base_url(); ?>marketplace/index" class="btn btn-block btn-outline-info my-3"><i
					class="fas fa-arrow-circle-left mr-2">
				</i> Kembali ke Marketplace</a>
			<hr>

			<div><a class="h5">Detail Produk :</a></div>

			<div class="table-responsive">
				<table class="table table-hover table-borderless table-responsive">
					<tbody>
						<tr>
							<th scope="row">Stok Produk</th>
							<td>:</td>
							<td><?php echo $paket->stok;?> pcs</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div><a class="h5">Keterangan Tambahan :</a></div>
			<div class="table-responsive">
				<table class="table table-borderless table-responsive">
					<tbody>
						<tr>
							<th scope="row">Keterangan Lainnya</th>
							<td>:</td>
							<td>Belum ada.</td>
						</tr>
					</tbody>
				</table>
			</div>

			<hr>

			<div class="row">

				<div class="col-6">
					<div class="input-group">
						<select class="custom-select" id="inputGroupSelect01">
							<option selected>Jumlah Pembelian</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</div>
				</div>

				<div class="col-6">
					<a href="<?= base_url(); ?>pembelian/index" class="btn btn-block btn-success"><i
							class="fas fa-cart-arrow-down mr-2">
						</i> Beli Produk Ini</a>
				</div>
			</div>

		</div>
	</div>
</section>
