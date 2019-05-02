<section class="container my-4">
	<h2 style="color: teal;" class="text-center">Upload Produk Baru.</h2>
    <hr>
</section>

<section class="container">
	<form action="<?php base_url('Adminpage/Produk/edit_tanaman') ?>">
		<div class="row">

			<div class="col-lg-6 col-md-12 col-sm-12">

				<div class="form-group">
					<label for="exampleInputEmail1" style="color: teal;">Nama Produk</label>
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
						placeholder="Nama produk" name="nama_tanaman" value="<?php echo $tanaman->nama_tanaman ?>">
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1" style="color: teal;">Tipe Tanaman</label>
					<div class="form-check">
						&nbsp;<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
							value="option2">
						<label class="form-check-label" for="exampleRadios2">
							Tanaman
						</label>
					</div>
					<div class="form-check">
						&nbsp;<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
							value="option2">
						<label class="form-check-label" for="exampleRadios2">
							Aksesoris
						</label>
					</div>
					<div class="form-check">
						&nbsp;<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
							value="option2">
						<label class="form-check-label" for="exampleRadios2">
							Paket
						</label>
					</div>
				</div>

				<div class="form-group">
					<label for="exampleFormControlSelect1" style="color: teal;">Grup Tanaman</label>
					<select class="form-control" id="exampleFormControlSelect1">
						<option>Kaktus</option>
						<option>Aglonema</option>
						<option>Sansivera</option>
						<option>None</option>
					</select>
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1" style="color: teal;">Harga Produk</label>
					<input type="text" class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Harga produk" name="harga" value="<?php echo $tanaman->harga ?>">
                        <div class="invalid-feedback">
									<?php echo form_error('judul') ?>
								</div>
				</div>

			</div>

			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="row">
					<div class="col-4">
						<div class="form-group">
							<label for="exampleInputEmail1" style="color: teal;">Diameter Produk</label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
								placeholder="... cm">
						</div>
					</div>
					<div class="col-4">
						<div class="form-group">
							<label for="exampleInputEmail1" style="color: teal;">Tinggi Produk</label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
								placeholder="... cm">
						</div>
					</div>
					<div class="col-4">
						<div class="form-group">
							<label for="exampleInputEmail1" style="color: teal;">Berat Produk</label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
								placeholder="... gram">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1" style="color: teal;">Keterangan Tambahan</label>
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
						placeholder="Tentang produk">
				</div>

				<div class="custom-file">
					<input type="file" class="custom-file-input" id="customFile">
					<label class="custom-file-label" for="customFile">Upload Foto Produk</label>
				</div>

                <div class="row mt-4">
                    <div class="col-4"><a href="<?php echo base_url()?>adminpage/Produk/product_admin" class="btn btn-outline-secondary btn-block">Cancel</a></div>
                    <div class="col-8"><a href="" class="btn btn-success btn-block">Tambah Produk</a></div>
                </div>

			</div>

		</div>
	</form>
</section>
