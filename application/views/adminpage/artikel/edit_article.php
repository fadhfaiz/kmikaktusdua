<section class="container my-5">
	<form action="<?php base_url('Adminpage/Artikel/edit_article') ?>" method="post">
    <div class="form-group">
			<label for="judul" style="color: teal;" class="h4">Kode Artikel</label>
			<input type="text" class="form-control <?php echo form_error('kode_artikel') ? 'is-invalid':'' ?>"  id="kode_artikel" name="kode_artikel" aria-describedby="emailHelp"
				 value="<?php echo $artikel->kode_artikel ?>">
								<div class="invalid-feedback">
									<?php echo form_error('kode_artikel') ?>
								</div>
		</div>
		<div class="form-group">
			<label for="judul" style="color: teal;" class="h4">Judul Artikel</label>
			<input type="text" class="form-control <?php echo form_error('judul') ? 'is-invalid':'' ?>"  id="judul" name="judul" aria-describedby="emailHelp"
				placeholder="judul artikel" value="<?php echo $artikel->judul ?>">
								<div class="invalid-feedback">
									<?php echo form_error('judul') ?>
								</div>
		</div>
		<div class="form-group">
			<label for="isi_artikel" style="color: teal;" class="h4">Isi Artikel</label>
			<textarea class="form-control <?php echo form_error('isi') ? 'is-invalid':'' ?>" id="isi" name="isi" rows="5"><?php echo $artikel->isi ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('isi') ?>
								</div>
        </div>
        <div class="row">
		<div class="col-8">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Upload</span>
				</div>
				<div class="custom-file">
					<input type="file" class="custom-file-input <?php echo form_error('gambar') ? 'is-invalid':'' ?>" id="gambar" name="gambar">
                    <label class="custom-file-label" for="inputGroupFile01"><?php echo $artikel->gambar ?></label>
                    <div class="invalid-feedback">
									<?php echo form_error('gambar') ?>
								</div>
				</div>
			</div>
		</div>
		<div class="col-2"><button class="btn btn-block btn-warning" type="reset">Cancel</button></div>
		<div class="col-2"><button class="btn btn-block btn-warning" type="submit">Submit</button></div>
	</div>
	</form>

</section>