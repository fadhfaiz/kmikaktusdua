<section class="container">	
<form>
		<div class="form-row mt-4">
			<div class="form-group col-lg-8 col-md-12 col-sm-12">
				<!-- <label for="inputEmail4">Email</label> -->
				<input type="text" class="form-control font-italic" id="cari-barang"
					placeholder="Cari nama produk / nama tanaman...">
			</div>
			<!-- <div class="form-group col-lg-3 col-md-12 col-sm-12">
				<select id="inputState" class="form-control">
					<option selected>Aksesoris Tanaman</option>
					<option>Pot</option>
					<option>Batu Alam</option>
				</select>
			</div>
			<div class="form-group col-lg-3 col-md-12 col-sm-12">
				<select id="inputState" class="form-control">
					<option selected>Kategori</option>
					<option>Kaktus</option>
					<option>Sansiveera</option>
					<option>Aglonemaa</option>
				</select>
			</div> -->
			<div class="form-group col-lg-4 col-md-12 col-sm-12">
				<!-- <label for="">Cek Biaya Kirim</label> -->
				<a href="http://www.jet.co.id/tariff" class="btn btn-block btn-warning" target="_blank">Cek Biaya Kirim
					J&T Express</a>
				<!-- <button type="button" class="btn btn-block btn-success">Cek Biaya Kirim</button> -->
			</div>
		</div>
	</form>
</section>

<section class="container">
	<div class="card-deck my-4">
	<div class="card-columns">
		<?php	
			foreach($tanaman as $b){
				echo '
					<div class="card">
						<a href="' .base_url().'marketplace/detail_tanaman/'.$b->kode_tanaman.'"
							style="color:black; text-decoration: none;"><img src="'. base_url().'assets/img/'.$b->gambar.'"
								class="card-img-top" alt="...">
							<div class="card-body">
								<h6 class="card-title">'.$b->nama_tanaman.'</h6>
							</div>
						</a>
						<div class="card-footer">
							<small class="text-muted">Rp. '.$b->harga.'</small>
						</div>
					</div>
				
				';
			}
			foreach($aksesoris as $b){
				echo '
			
					<div class="card">
						<a href="' .base_url().'marketplace/detail_aksesoris/'.$b->kode_aksesoris.'"
							style="color:black; text-decoration: none;"><img src="'. base_url().'assets/img/'.$b->gambar.'"
								class="card-img-top" alt="...">
							<div class="card-body">
								<h6 class="card-title">'.$b->nama.'</h6>
							</div>
						</a>
						<div class="card-footer">
							<small class="text-muted">Rp. '.$b->harga.'</small>
						</div>
					</div>
				
				';
			}
			foreach($paket as $b){
				echo '
	
					<div class="card">
						<a href="' .base_url().'marketplace/detail_paket/'.$b->kode_paket.'"
							style="color:black; text-decoration: none;"><img src="'. base_url().'assets/img/'.$b->gambar.'"
								class="card-img-top" alt="...">
							<div class="card-body">
								<h6 class="card-title">'.$b->nama_paket.'</h6>
							</div>
						</a>
						<div class="card-footer">
							<small class="text-muted">Rp. '.$b->harga.'</small>
						</div>
					</div>
			

				';
			}
		?>
	</div>
	</div>

</section>

<section class="container my-5">
	<nav aria-label="Page navigation example">
		<ul class="pagination justify-content-center"">
			<li class="page-item">
				<a class="page-link" href="#" aria-label="Previous">
					<span aria-hidden="true">&laquo; Previous Page</span>
				</a>
			</li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#">4</a></li>
			<li class="page-item"><a class="page-link" href="#">5</a></li>
			<li class="page-item"><a class="page-link" href="#">6</a></li>
			<li class="page-item">
				<a class="page-link" href="#" aria-label="Next">
					<span aria-hidden="true">Next Page &raquo;</span>
				</a>
			</li>
		</ul>
	</nav>
	<a href="https://www.instagram.com/fadh.leather/" class="float-ig" target="_blank">
		<i class="fab fa-instagram my-float"></i>
	</a>

	<a href="https://api.whatsapp.com/send?phone=6281804086665&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."
		class="float" target="_blank">
		<i class="fab fa-whatsapp my-float"></i>
	</a>

</section>
