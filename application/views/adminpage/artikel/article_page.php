<section class="container my-5">
	<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
	<?php endif; ?>
	<form action="<?php base_url('Adminpage/Artikel/article_admin') ?>" method="post">
		<div class="form-group">
			<label for="judul" style="color: teal;" class="h4">Judul Artikel</label>
			<input type="text" class="form-control <?php echo form_error('judul') ? 'is-invalid':'' ?>"  id="judul" name="judul" aria-describedby="emailHelp"
				placeholder="judul artikel">
								<div class="invalid-feedback">
									<?php echo form_error('judul') ?>
								</div>
		</div>
		<div class="form-group">
			<label for="isi_artikel" style="color: teal;" class="h4">Isi Artikel</label>
			<textarea class="form-control <?php echo form_error('isi') ? 'is-invalid':'' ?>" id="isi" name="isi" rows="3"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('isi') ?>
								</div>
		</div>
	<div class="row">
		<div class="col-sm-8">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Upload</span>
				</div>
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="gambar" name="gambar">
					<label class="custom-file-label" for="gambar"></label>
				</div>
			</div>
		</div>
		<div class="col-sm-2"><button class="btn btn-block btn-warning" type="reset">Cancel</button></div>
		<div class="col-sm-2"><button class="btn btn-block btn-warning" type="submit">Submit</button></div>
	</div>
	</form>
</section>