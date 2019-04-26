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
								<td><?php echo date("d/m/Y") ?></td>		
								<td>
								<span><a href="<?php echo base_url('Adminpage/Artikel/edit_article/'.$artikel->kode_artikel)?>" class="btn btn-outline-success"><i class="fas fa-edit"></i></a></span>
								<span><a href="<?php echo base_url('Adminpage/Artikel/hapus_article/'.$artikel->kode_artikel)?>" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a></span>
								</td>
								</tr>
				
				<?php endforeach; ?>	
				<?php endif; ?>	
				</tr>
			
			</tbody>
		</table>
	</div>
</section>
