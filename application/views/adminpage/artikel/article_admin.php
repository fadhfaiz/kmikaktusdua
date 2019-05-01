<section class="container mt-4 mb-4">
	<div class="row">
		<div class="col-lg-4 col-md-12 col-sm-12">

		</div>

		<div class="col-lg-4 col-md-12 col-sm-12">
			<h3 class="text-center" style="color: teal;">Halaman Admin Artikel</h3>
		</div>

		<div class="col-lg-4 col-md-12 col-sm-12">
			<a href="<?php echo base_url()?>adminpage/artikel/article_page" class="btn btn-warning">Upload Article</a>
		</div>

	</div>
</section>

<section class="container">
	<div class="table-responsive">
		<table class="table table-hover">
			<thead class="thead-light">
				<tr>
					<th scope="col">Kode Artikel</th>
					<th scope="col">Image</th>
					<th scope="col">Title</th>
					<th scope="col">Published At</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<?php
				if(!empty($artikel)):
				?>

				<?php foreach($artikel as $artikel): ?>
				
								<tr>
								<td><?php echo $artikel->kode_artikel ?></td>
								<td><?php echo $artikel->gambar ?></td>
								<td><?php echo $artikel->judul ?></td>
								<td><?php echo $artikel->tanggal ?></td>		
								<td>
								<span><a href="<?php echo base_url('Adminpage/Artikel/edit_article/'.$artikel->kode_artikel)?>" class="btn btn-outline-success"><i class="fas fa-edit"></i></a></span>
								<span><button class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash-alt"></i></button></span>
								</td>
								</tr>
								<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">HAPUS</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									Yakin Ingin Menghapus Data??
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<a href="<?php echo base_url('Adminpage/Artikel/hapus_article/'.$artikel->kode_artikel)?>" class="btn btn-primary">Save changes</a>
								</div>
								</div>
							</div>
							</div>
							<!-- Modal -->
				<?php endforeach; ?>	
				<?php endif; ?>	
				</tr>
			</tbody>
		</table>
	</div>
</section>
